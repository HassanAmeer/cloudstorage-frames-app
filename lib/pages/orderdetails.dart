import 'package:cached_network_image/cached_network_image.dart';
import 'package:cloudstorage/constant/links.dart';
import 'package:cloudstorage/models/ordersModel.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';

import '../constant/colors.dart';
import '../constant/images.dart';

class OrdersDetails extends StatefulWidget {
  final OrdersModel data;
  const OrdersDetails({super.key, required this.data});

  @override
  State<OrdersDetails> createState() => _OrdersDetailsState();
}

class _OrdersDetailsState extends State<OrdersDetails> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
            backgroundColor: AppColors.primaryColor.withOpacity(0.05),
            title: const Text("Order Details"),
            actions: [
              // Padding(
              //     padding: const EdgeInsets.only(right: 10),
              //     child: Text("ID: ${widget.data.id.length}",
              //         style: GoogleFonts.agbalumo(
              //             color: Colors.white, fontSize: 18)))
            ]),
        body: Padding(
            padding: const EdgeInsets.all(10),
            child: Column(children: [
              // const Divider(height: 1),
              ListTile(
                  tileColor: AppColors.primaryColor.withOpacity(0.05),
                  title: Text("STATUS: ",
                      style: GoogleFonts.albertSans(
                          color: Colors.grey,
                          fontSize: 14,
                          fontWeight: FontWeight.bold)),
                  trailing: Text(widget.data.status.toString(),
                          style: GoogleFonts.agbalumo(
                              color: AppColors.primaryColor, fontSize: 17))
                      .animate(onPlay: (controller) => controller.repeat())
                      .shimmer(
                          color: Colors.grey.shade200,
                          duration: 1.seconds,
                          delay: (1).seconds)),
              ListTile(
                  title: Row(
                    children: [
                      Text(
                        "ORDER ID: ",
                        style: GoogleFonts.albertSans(
                            color: Colors.grey,
                            fontSize: 14,
                            fontWeight: FontWeight.bold),
                      ),
                      Text(
                        widget.data.id,
                        style: GoogleFonts.albertSans(
                            color: Colors.black,
                            fontSize: 14,
                            fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                  trailing: Row(mainAxisSize: MainAxisSize.min, children: [
                    Text("${DateTime.parse(widget.data.createdAt).day}/${DateTime.parse(widget.data.createdAt).month}/${DateTime.parse(widget.data.createdAt).year} ",
                            style: GoogleFonts.agdasima(
                                color: AppColors.primaryColor, fontSize: 17))
                        .animate(onPlay: (controller) => controller.repeat())
                        .shimmer(
                            color: Colors.grey.shade200,
                            duration: 1.seconds,
                            delay: (1).seconds),
                    // const Icon(Icons.history, color: Colors.grey)
                  ])),
              const Divider(height: 1),

              ListTile(
                  title: Text("TRANSACTION ID: ",
                      style: GoogleFonts.lato(
                          color: Colors.grey,
                          fontSize: 14,
                          fontWeight: FontWeight.w400)),
                  subtitle: Text(widget.data.trId.toString(),
                      style: GoogleFonts.lato(
                          color: Colors.black,
                          fontSize: 14,
                          fontWeight: FontWeight.w500)),
                  trailing: Text("${widget.data.price} \$",
                          style: GoogleFonts.agdasima(
                              color: AppColors.primaryColor, fontSize: 17))
                      .animate(onPlay: (controller) => controller.repeat())
                      .shimmer(
                          color: Colors.grey.shade200,
                          duration: 1.seconds,
                          delay: (1).seconds)),
              const Divider(height: 1),
              ListTile(
                  title: Text("Description",
                      style: GoogleFonts.albertSans(
                          color: Colors.grey, fontSize: 14)),
                  subtitle: Text("${widget.data.desc} ...")),
              Row(children: [
                Text(" IMAGES: ",
                    style: GoogleFonts.lato(
                        color: AppColors.primaryColor,
                        fontSize: 14,
                        fontWeight: FontWeight.bold))
              ]),

              GridView.builder(
                  shrinkWrap: true,
                  controller: ScrollController(),
                  gridDelegate: const SliverGridDelegateWithFixedCrossAxisCount(
                      crossAxisCount: 3),
                  itemCount: widget.data.images.length,
                  itemBuilder: (BuildContext context, int index) {
                    return InkWell(
                      onTap: () {
                        showCupertinoDialog(
                            context: context,
                            builder: (BuildContext context) {
                              return CupertinoAlertDialog(
                                  content: SizedBox(
                                      width: 210,
                                      height: 200,
                                      child: CachedNetworkImage(
                                          imageUrl: ApiLinks.imgLink +
                                              widget.data.images[index],
                                          errorWidget: (context, url, error) {
                                            return Image.asset(
                                                AppImages.imgnotfound,
                                                opacity:
                                                    const AlwaysStoppedAnimation(
                                                        0.3));
                                          },
                                          progressIndicatorBuilder: (context,
                                                  url, downloadProgress) =>
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
                                        child: const Text('Close')),
                                  ],
                                  insetAnimationCurve: Curves.slowMiddle,
                                  insetAnimationDuration:
                                      const Duration(seconds: 2));
                            });
                      },
                      child: Card(
                          child: CachedNetworkImage(
                              errorWidget: (context, url, error) {
                                return Image.asset(AppImages.imgnotfound,
                                    opacity: const AlwaysStoppedAnimation(0.3));
                              },
                              progressIndicatorBuilder:
                                  (context, url, progress) {
                                return const Column(
                                  mainAxisAlignment: MainAxisAlignment.end,
                                  children: [
                                    SizedBox(
                                      height: 2,
                                      child: LinearProgressIndicator(
                                          valueColor: AlwaysStoppedAnimation(
                                              AppColors.primaryColor),
                                          backgroundColor: Colors.grey),
                                    ),
                                  ],
                                );
                              },
                              fit: BoxFit.cover,
                              imageUrl: ApiLinks.imgLink +
                                  widget.data.images[index])),
                    );
                  }),
              const SizedBox(height: 10),
              Row(children: [
                Text(" FRAMES: ",
                    style: GoogleFonts.lato(
                        color: AppColors.primaryColor,
                        fontSize: 14,
                        fontWeight: FontWeight.bold))
              ]),

              GridView.builder(
                  shrinkWrap: true,
                  controller: ScrollController(),
                  gridDelegate: const SliverGridDelegateWithFixedCrossAxisCount(
                      crossAxisCount: 3),
                  itemCount: widget.data.frames.length,
                  itemBuilder: (BuildContext context, int index) {
                    return InkWell(
                        onTap: () {
                          showCupertinoDialog(
                              context: context,
                              builder: (BuildContext context) {
                                return CupertinoAlertDialog(
                                    content: SizedBox(
                                        width: 210,
                                        height: 200,
                                        child: CachedNetworkImage(
                                            imageUrl: ApiLinks.imgLink +
                                                widget.data.frames[index],
                                            errorWidget: (context, url, error) {
                                              return Image.asset(
                                                  AppImages.imgnotfound,
                                                  opacity:
                                                      const AlwaysStoppedAnimation(
                                                          0.3));
                                            },
                                            progressIndicatorBuilder: (context,
                                                    url, downloadProgress) =>
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
                                          child: const Text('Close')),
                                    ],
                                    insetAnimationCurve: Curves.slowMiddle,
                                    insetAnimationDuration:
                                        const Duration(seconds: 2));
                              });
                        },
                        child: Card(
                            child: CachedNetworkImage(
                                errorWidget: (context, url, error) {
                                  return Image.asset(AppImages.imgnotfound,
                                      opacity:
                                          const AlwaysStoppedAnimation(0.3));
                                },
                                progressIndicatorBuilder:
                                    (context, url, progress) {
                                  return const Column(
                                    mainAxisAlignment: MainAxisAlignment.end,
                                    children: [
                                      SizedBox(
                                        height: 2,
                                        child: LinearProgressIndicator(
                                            valueColor: AlwaysStoppedAnimation(
                                                AppColors.primaryColor),
                                            backgroundColor: Colors.grey),
                                      ),
                                    ],
                                  );
                                },
                                fit: BoxFit.cover,
                                imageUrl: ApiLinks.imgLink +
                                    widget.data.frames[index])));
                  }),
              const SizedBox(height: 10),
              Row(children: [
                Text(" SLIDES: ",
                    style: GoogleFonts.lato(
                        color: AppColors.primaryColor,
                        fontSize: 14,
                        fontWeight: FontWeight.bold))
              ]),

              GridView.builder(
                  shrinkWrap: true,
                  controller: ScrollController(),
                  gridDelegate: const SliverGridDelegateWithFixedCrossAxisCount(
                      crossAxisCount: 3),
                  itemCount: widget.data.slides.length,
                  itemBuilder: (BuildContext context, int index) {
                    return InkWell(
                        onTap: () {
                          showCupertinoDialog(
                              context: context,
                              builder: (BuildContext context) {
                                return CupertinoAlertDialog(
                                    content: SizedBox(
                                        width: 210,
                                        height: 200,
                                        child: CachedNetworkImage(
                                            imageUrl: ApiLinks.imgLink +
                                                widget.data.slides[index],
                                            errorWidget: (context, url, error) {
                                              return Image.asset(
                                                  AppImages.imgnotfound,
                                                  opacity:
                                                      const AlwaysStoppedAnimation(
                                                          0.3));
                                            },
                                            progressIndicatorBuilder: (context,
                                                    url, downloadProgress) =>
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
                                          child: const Text('Close')),
                                    ],
                                    insetAnimationCurve: Curves.slowMiddle,
                                    insetAnimationDuration:
                                        const Duration(seconds: 2));
                              });
                        },
                        child: Card(
                            child: CachedNetworkImage(
                                errorWidget: (context, url, error) {
                                  return Image.asset(AppImages.imgnotfound,
                                      opacity:
                                          const AlwaysStoppedAnimation(0.3));
                                },
                                progressIndicatorBuilder:
                                    (context, url, progress) {
                                  return const Column(
                                    mainAxisAlignment: MainAxisAlignment.end,
                                    children: [
                                      SizedBox(
                                        height: 2,
                                        child: LinearProgressIndicator(
                                            valueColor: AlwaysStoppedAnimation(
                                                AppColors.primaryColor),
                                            backgroundColor: Colors.grey),
                                      ),
                                    ],
                                  );
                                },
                                fit: BoxFit.cover,
                                imageUrl: ApiLinks.imgLink +
                                    widget.data.slides[index])));
                  }),
            ])));
  }
}
