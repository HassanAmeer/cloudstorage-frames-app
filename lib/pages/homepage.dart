import 'dart:math';

import 'package:cached_network_image/cached_network_image.dart';
import '../constant/colors.dart';
import '../constant/images.dart';
import '../constant/links.dart';
import '../provider/authVm.dart';
import '../provider/foldersVm.dart';
import '../widgets/dotloader.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:masonry_list_view_grid/masonry_list_view_grid.dart';
import 'package:provider/provider.dart';

class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  get decoration => null;

  List imagesList = [
    AppImages.img1,
    AppImages.img2,
    AppImages.img3,
    AppImages.img4,
    AppImages.img5,
    AppImages.video,
    AppImages.img1,
    AppImages.img2,
    AppImages.img3,
    AppImages.img4,
    AppImages.img5,
    AppImages.video,
    AppImages.img1,
    AppImages.img2,
    AppImages.img3,
    AppImages.img4,
    AppImages.img5,
    AppImages.video,
  ];

  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    var u = Provider.of<AuthVm>(context, listen: false).userProfile;
    await Provider.of<FoldersVm>(context, listen: false)
        .getAllFolders(context, token: u.token);
  }

  @override
  Widget build(BuildContext context) {
    return Consumer<FoldersVm>(builder: (context, p, c) {
      return Scaffold(
          body: Column(children: [
        const Text("All Uploads",
            style: TextStyle(
                fontSize: 35,
                color: AppColors.primaryColor,
                fontWeight: FontWeight.bold)),
        Expanded(
            child: p.isLoading
                ? const DotLoader(color: AppColors.primaryColor)
                : p.allMediaList.isEmpty
                    ? Padding(
                        padding: const EdgeInsets.only(top: 150),
                        child: Center(
                            child: Image.asset(AppImages.foldernotfound,
                                    opacity: const AlwaysStoppedAnimation(0.2))
                                .animate(
                                    onPlay: (controller) => controller.repeat())
                                .shader()
                                .shimmer(
                                    color: Colors.grey.shade200,
                                    duration: 3.seconds)))
                    : MasonryListViewGrid(
                        column: 2,
                        padding: const EdgeInsets.all(8.0),
                        children: List.generate(
                            p.allMediaList.length,
                            (index) => InkWell(
                                onTap: () {
                                  showCupertinoDialog(
                                      context: context,
                                      builder: (BuildContext context) {
                                        return CupertinoAlertDialog(
                                            content: SizedBox(
                                                width: 210,
                                                height: 200,
                                                child: CachedNetworkImage(
                                                    fit: BoxFit.cover,
                                                    imageUrl: ApiLinks
                                                            .imgLink +
                                                        p.allMediaList[index],
                                                    errorWidget:
                                                        (context, url, error) {
                                                      return Image.asset(
                                                          AppImages.imgnotfound,
                                                          opacity:
                                                              const AlwaysStoppedAnimation(
                                                                  0.3));
                                                    },
                                                    progressIndicatorBuilder: (context,
                                                            url,
                                                            downloadProgress) =>
                                                        Center(
                                                            child: SizedBox(
                                                                width: 50,
                                                                height: 50,
                                                                child: CircularProgressIndicator(
                                                                    color: AppColors
                                                                        .primaryColor
                                                                        .shade100,
                                                                    value: downloadProgress
                                                                        .progress))))),
                                            actions: [
                                              CupertinoButton(
                                                  onPressed: () {
                                                    Navigator.pop(context);
                                                  },
                                                  child: const Text('Close'))
                                            ],
                                            insetAnimationCurve:
                                                Curves.slowMiddle,
                                            insetAnimationDuration:
                                                const Duration(seconds: 2));
                                      });
                                },
                                child: Container(
                                    clipBehavior: Clip.antiAlias,
                                    decoration: BoxDecoration(
                                        color: Color((Random().nextDouble() *
                                                    0xFFFFFF)
                                                .toInt())
                                            .withOpacity(0.5),
                                        borderRadius:
                                            BorderRadius.circular(10)),
                                    height: (150 + (index % 3 == 0 ? 50 : 0))
                                        .toDouble(),
                                    child: Center(
                                        child: CachedNetworkImage(
                                      imageUrl: ApiLinks.imgLink +
                                          p.allMediaList[index],
                                      errorWidget: (context, url, error) {
                                        return Image.asset(
                                            AppImages.imgnotfound,
                                            opacity:
                                                const AlwaysStoppedAnimation(
                                                    0.3));
                                      },
                                      progressIndicatorBuilder:
                                          (context, url, progress) {
                                        return const Column(
                                            mainAxisAlignment:
                                                MainAxisAlignment.end,
                                            children: [
                                              SizedBox(
                                                  height: 2,
                                                  child: LinearProgressIndicator(
                                                      valueColor:
                                                          AlwaysStoppedAnimation(
                                                              AppColors
                                                                  .primaryColor),
                                                      backgroundColor:
                                                          Colors.grey))
                                            ]);
                                      },
                                      fit: BoxFit.cover,
                                      width: double.infinity,
                                      height: double.infinity,
                                      // width: MediaQuery.of(context).size.width * 0.5,
                                    ))))))),
      ]));
    });
  }
}
////floatin
