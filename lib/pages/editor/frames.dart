import 'package:cached_network_image/cached_network_image.dart';
import '../../provider/authVm.dart';
import '../../provider/foldersVm.dart';
import '../../provider/upgradingVm.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:provider/provider.dart';

import '../../constant/colors.dart';
import '../../constant/images.dart';
import '../../constant/links.dart';
import '../../widgets/dotloader.dart';
import '../../widgets/toast.dart';

class FramesPages extends StatefulWidget {
  final String imgId;
  const FramesPages({super.key, required this.imgId});

  @override
  State<FramesPages> createState() => _FramesPagesState();
}

class _FramesPagesState extends State<FramesPages> {
  List imagesList = [
    // AppFrames.frame1,
    // AppFrames.frame2,
    AppFrames.frame3,
    AppFrames.frame4,
    AppFrames.frame5,
  ];

  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  void syncFirstF() async {
    var u = Provider.of<AuthVm>(context, listen: false);
    var f = Provider.of<FoldersVm>(context, listen: false);
    if (f.framesList.isEmpty) {
      f.getAllFrames(context, token: u.userProfile.token);
    }
  }

  @override
  Widget build(BuildContext context) {
    return Consumer<FoldersVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
            title: const Text('Frames'),
            actions: [
              context.watch<Upgrading>().isLoadingFoyBuy
                  ? const Padding(
                      padding: EdgeInsets.all(8),
                      child: DotLoader(color: AppColors.primaryColor))
                  : const SizedBox.shrink()
            ],
          ),
          body: SingleChildScrollView(
              controller: ScrollController(),
              child: Column(children: [
                Text("Free + Premium",
                    style: Theme.of(context).textTheme.headlineMedium!.copyWith(
                        color: AppColors.primaryColor,
                        fontWeight: FontWeight.bold)),
                const SizedBox(height: 20),
                // Text("${p.framesList[1].uids}"),
                p.isLoading
                    ? const Padding(
                        padding: EdgeInsets.only(top: 250),
                        child: DotLoader(color: AppColors.primaryColor))
                    : p.foldersList.isEmpty
                        ? Padding(
                            padding: const EdgeInsets.only(top: 100),
                            child: Center(
                                child: Column(children: [
                              Image.asset(AppImages.noframe,
                                      width: MediaQuery.of(context).size.width *
                                          0.7,
                                      opacity:
                                          const AlwaysStoppedAnimation(0.2))
                                  .animate(
                                      onPlay: (controller) =>
                                          controller.repeat())
                                  .shader()
                                  .shimmer(
                                      color: Colors.grey.shade200,
                                      duration: 3.seconds),
                              Text("No Frames",
                                      style: GoogleFonts.agbalumo(
                                          fontSize: 40,
                                          color: AppColors.primaryColor
                                              .withOpacity(0.3)))
                                  .animate(
                                      onPlay: (controller) =>
                                          controller.repeat())
                                  .shimmer(
                                      color: Colors.orange.shade200,
                                      duration: 3.seconds)
                            ])))
                        : ListView.builder(
                            itemCount: p.framesList.length,
                            shrinkWrap: true,
                            controller: ScrollController(),
                            itemBuilder: (BuildContext context, int index) {
                              var data = p.framesList[index];
                              return Padding(
                                  padding: const EdgeInsets.all(10),
                                  child: ClipRRect(
                                      borderRadius: BorderRadius.circular(10),
                                      child: Stack(children: [
                                        Container(
                                            clipBehavior: Clip.antiAlias,
                                            margin: const EdgeInsets.all(10),
                                            width: double.infinity,
                                            decoration: BoxDecoration(
                                                borderRadius:
                                                    BorderRadius.circular(10),
                                                color: Colors.grey.shade100,
                                                boxShadow: [
                                                  BoxShadow(
                                                      // color: AppColors.primaryColor.withOpacity(0.3),
                                                      color:
                                                          Colors.grey.shade300,
                                                      spreadRadius: 5,
                                                      blurRadius: 20,
                                                      offset:
                                                          const Offset(0, 3))
                                                ]),
                                            child: Column(children: [
                                              Center(
                                                  child: CachedNetworkImage(
                                                      fit: BoxFit.cover,
                                                      imageUrl:
                                                          ApiLinks.imgLink +
                                                              data.image,
                                                      errorWidget: (context,
                                                          url, error) {
                                                        return Image.asset(
                                                            AppImages
                                                                .imgnotfound,
                                                            opacity:
                                                                const AlwaysStoppedAnimation(
                                                                    0.3));
                                                      },
                                                      progressIndicatorBuilder:
                                                          (context, url,
                                                                  downloadProgress) =>
                                                              SizedBox(
                                                                height: 240,
                                                                child: Center(
                                                                    child: SizedBox(
                                                                        width:
                                                                            50,
                                                                        height:
                                                                            50,
                                                                        child: CircularProgressIndicator(
                                                                            color:
                                                                                AppColors.primaryColor.shade100,
                                                                            value: downloadProgress.progress))),
                                                              ))),
                                              const Divider(height: 1),
                                              // Text(
                                              //     "${p.selectedFramesLinkList.toString()}"),
                                              data.uids.contains(int.parse(context
                                                          .watch<AuthVm>()
                                                          .userProfile
                                                          .id
                                                          .toString())) ||
                                                      data.price == 0
                                                  ? SizedBox(
                                                      width: double.infinity,
                                                      child: ElevatedButton(
                                                          onPressed: () {
                                                            p.selectedFramesLinkListF(
                                                                imgId: widget
                                                                    .imgId,
                                                                imgLink: ApiLinks
                                                                        .imgLink +
                                                                    data.image);
                                                            Navigator.pop(
                                                                context);
                                                          },
                                                          style: ElevatedButton.styleFrom(
                                                              backgroundColor:
                                                                  AppColors
                                                                      .primaryColor,
                                                              shape: RoundedRectangleBorder(
                                                                  borderRadius:
                                                                      BorderRadius.circular(
                                                                          0))),
                                                          child: Text("Select",
                                                              style: GoogleFonts.lato(
                                                                  color:
                                                                      Colors.white,
                                                                  fontWeight: FontWeight.bold))))
                                                  : SizedBox(
                                                      width: double.infinity,
                                                      child: ElevatedButton(
                                                          onPressed: () async {
                                                            await Provider.of<
                                                                        Upgrading>(
                                                                    context,
                                                                    listen:
                                                                        false)
                                                                .forBuyingFramesF(
                                                                    context,
                                                                    amount: data
                                                                        .price
                                                                        .toString())
                                                                .then(
                                                                    (value) async {
                                                              if (value) {
                                                                debugPrint(
                                                                    " 👉 after  payment value: $value");
                                                                await p
                                                                    .buyFrames(
                                                                        context,
                                                                        token: Provider.of<AuthVm>(context, listen: false)
                                                                            .userProfile
                                                                            .token,
                                                                        frameId:
                                                                            data
                                                                                .id)
                                                                    .then(
                                                                        (v) {});
                                                              } else {
                                                                snackBarColorF(
                                                                    "Please try again",
                                                                    context);
                                                              }
                                                            });
                                                          },
                                                          style: ElevatedButton.styleFrom(backgroundColor: Colors.grey.shade300, shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(0))),
                                                          child: Text("Buy", style: GoogleFonts.lato(color: AppColors.primaryColor, fontWeight: FontWeight.bold))))
                                            ])),
                                        Positioned(
                                            right: 10,
                                            top: 10,
                                            child: Transform.translate(
                                                offset: const Offset(40, 5),
                                                child: Transform.rotate(
                                                    angle: 0.7,
                                                    child: Container(
                                                        width: 130,
                                                        decoration: BoxDecoration(
                                                            color: AppColors
                                                                .primaryColor
                                                                .withOpacity(
                                                                    0.4)),
                                                        child: Padding(
                                                            padding:
                                                                const EdgeInsets.all(
                                                                    2),
                                                            child: Center(
                                                                child: Text("${data.price} USD",
                                                                        style: GoogleFonts.lato(color: Colors.indigoAccent, fontSize: 18, fontWeight: FontWeight.bold))
                                                                    .animate(onPlay: (controller) => controller.repeat())
                                                                    .shimmer(color: Colors.amber, duration: 3.seconds)))))))
                                      ])));
                            })
              ])));
    });
  }
}
