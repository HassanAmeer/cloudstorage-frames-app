import 'package:cached_network_image/cached_network_image.dart';
import '../constant/colors.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:provider/provider.dart';

import '../constant/images.dart';
import '../constant/links.dart';
import '../provider/authVm.dart';
import '../widgets/dotloader.dart';
import 'orderdetails.dart';

class OrdersPage extends StatefulWidget {
  const OrdersPage({super.key});

  @override
  State<OrdersPage> createState() => _OrdersPageState();
}

class _OrdersPageState extends State<OrdersPage> {
  String orderType = "pending";

  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    AuthVm p = Provider.of<AuthVm>(context, listen: false);
    p.getOrdersF(context);
  }

  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
              leading: IconButton(
                onPressed: () {
                  Navigator.pop(context);
                },
                icon: const Icon(Icons.arrow_back_ios, color: Colors.white),
              ),
              title: Text(
                "All Orders",
                style:
                    GoogleFonts.agbalumo(color: Colors.white, letterSpacing: 1),
              ),
              actions: [
                Padding(
                    padding: const EdgeInsets.only(right: 10),
                    child: Text("Total: ${p.ordersList.length}",
                        style: GoogleFonts.agbalumo(
                            color: Colors.white, fontSize: 18)))
              ],
              backgroundColor: AppColors.primaryColor),
          body: p.isLoading
              ? const Center(child: DotLoader(color: AppColors.primaryColor))
              : p.ordersList.isEmpty
                  ? Center(
                      child: Text("No Orders yet",
                              style: GoogleFonts.agbalumo(
                                  color: Colors.grey.shade400, fontSize: 20))
                          .animate(onPlay: (controller) => controller.repeat())
                          .shimmer(
                              color: Colors.deepOrange.shade200,
                              duration: 2.seconds))
                  : Column(children: [
                      const SizedBox(height: 10),
                      Row(
                          mainAxisAlignment: MainAxisAlignment.center,
                          crossAxisAlignment: CrossAxisAlignment.center,
                          children: [
                            GestureDetector(
                                onTap: () {
                                  setState(() {
                                    orderType = "pending";
                                  });
                                },
                                child: Row(children: [
                                  Text("Pending  ",
                                      style: GoogleFonts.agbalumo(
                                          color: Colors.grey, fontSize: 17)),
                                  CircleAvatar(
                                      radius: 15,
                                      child: Icon(Icons.circle,
                                          color: orderType == "pending"
                                              ? AppColors.primaryColor
                                              : Colors.grey.shade400,
                                          size: 20))
                                ])),
                            GestureDetector(
                                onTap: () {
                                  setState(() {
                                    orderType = "progress";
                                  });
                                },
                                child: Row(children: [
                                  Text("    Progress  ",
                                      style: GoogleFonts.agbalumo(
                                          color: Colors.grey, fontSize: 17)),
                                  CircleAvatar(
                                      radius: 15,
                                      child: Icon(Icons.circle,
                                          color: orderType == "progress"
                                              ? AppColors.primaryColor
                                              : Colors.grey.shade400,
                                          size: 20))
                                ])),
                            GestureDetector(
                                onTap: () {
                                  setState(() {
                                    orderType = "completed";
                                  });
                                },
                                child: Row(children: [
                                  Text("    Completed  ",
                                      style: GoogleFonts.agbalumo(
                                          color: Colors.grey, fontSize: 17)),
                                  CircleAvatar(
                                      radius: 15,
                                      child: Icon(Icons.circle,
                                          color: orderType == "completed"
                                              ? AppColors.primaryColor
                                              : Colors.grey.shade400,
                                          size: 20))
                                ]))
                          ]),
                      const SizedBox(height: 20),
                      p.ordersList.where((e) => e.status == orderType).isEmpty
                          ? Center(
                              child: Padding(
                                  padding: EdgeInsets.only(
                                      top: MediaQuery.of(context).size.height *
                                          0.3),
                                  child: Column(
                                      mainAxisAlignment:
                                          MainAxisAlignment.center,
                                      crossAxisAlignment:
                                          CrossAxisAlignment.center,
                                      children: [
                                        Icon(
                                            Icons
                                                .production_quantity_limits_rounded,
                                            color: Colors.grey.shade300,
                                            size: 80),
                                        const SizedBox(height: 20),
                                        Text("Empty",
                                                style: GoogleFonts.agbalumo(
                                                    color: Colors.grey.shade300,
                                                    fontSize: 30))
                                            .animate(
                                                onPlay: (controller) =>
                                                    controller.repeat())
                                            .shimmer(
                                                color:
                                                    Colors.deepOrange.shade200,
                                                duration: 2.seconds)
                                      ])))
                          : Expanded(
                              child: ListView.separated(
                                  shrinkWrap: true,
                                  itemCount: p.ordersList
                                      .where((e) => e.status == orderType)
                                      .length,
                                  controller: ScrollController(),
                                  separatorBuilder: (context, index) =>
                                      const Divider(),
                                  itemBuilder:
                                      (BuildContext context, int index) {
                                    var data = p.ordersList
                                        .where((e) => e.status == orderType)
                                        .toList()[index];
                                    return ListTile(
                                        onTap: () {
                                          Navigator.push(
                                              context,
                                              MaterialPageRoute(
                                                  builder: (context) =>
                                                      OrdersDetails(
                                                          data: data)));
                                        },
                                        tileColor: AppColors.primaryColor
                                            .withOpacity(0.05),
                                        leading: SizedBox(
                                          width: 90,
                                          child: data.images.isEmpty
                                              ? Image.asset(AppImages.box,
                                                  color: AppColors.primaryColor,
                                                  opacity:
                                                      const AlwaysStoppedAnimation(
                                                          0.5))
                                              : Stack(
                                                  children: List.generate(
                                                      data.images.length > 5
                                                          ? 5
                                                          : data.images.length,
                                                      (index) => Positioned(
                                                            left: double.parse(
                                                                    (10 * index)
                                                                        .toString())
                                                                .toDouble(),
                                                            child: CircleAvatar(
                                                              radius: 27,
                                                              backgroundColor:
                                                                  AppColors
                                                                      .primaryColor
                                                                      .shade100
                                                                      .withOpacity(
                                                                          0.3),
                                                              child: ClipOval(
                                                                child: CircleAvatar(
                                                                    backgroundColor:
                                                                        Colors
                                                                            .white,
                                                                    radius: 25,
                                                                    child: CachedNetworkImage(
                                                                        imageUrl: data.images.isEmpty
                                                                            ? ""
                                                                            : ApiLinks.imgLink +
                                                                                data.images[
                                                                                    0],
                                                                        errorWidget: (context, url, error) => Padding(
                                                                            padding: const EdgeInsets.all(
                                                                                4),
                                                                            child: Image.asset(AppImages.box,
                                                                                color: AppColors.primaryColor,
                                                                                opacity: const AlwaysStoppedAnimation(0.5))),
                                                                        progressIndicatorBuilder: (context, url, progress) => const CircularProgressIndicator(color: AppColors.primaryColor),
                                                                        fit: BoxFit.cover)),
                                                              ),
                                                            ),
                                                          )),
                                                ),
                                        ),
                                        title: Text("Order No: ${data.id}",
                                            style: GoogleFonts.agbalumo(
                                                color: Colors.grey,
                                                fontSize: 15)),
                                        subtitle: Row(children: [
                                          data.status == "pending"
                                              ? Container(
                                                  decoration: BoxDecoration(
                                                      color: AppColors.orange,
                                                      borderRadius:
                                                          BorderRadius.circular(
                                                              5)),
                                                  child: Padding(
                                                      padding: const EdgeInsets
                                                          .symmetric(
                                                        horizontal: 8,
                                                      ),
                                                      child: Text(data.status,
                                                          style: GoogleFonts.agbalumo(
                                                              color: Colors
                                                                  .white))))
                                              : data.status == "progress"
                                                  ? Container(
                                                      decoration: BoxDecoration(
                                                          color:
                                                              AppColors.indigo,
                                                          borderRadius:
                                                              BorderRadius.circular(
                                                                  5)),
                                                      child: Padding(
                                                          padding: const EdgeInsets
                                                              .symmetric(
                                                            horizontal: 8,
                                                          ),
                                                          child: Text(data.status,
                                                              style: GoogleFonts.agbalumo(
                                                                  color: Colors
                                                                      .white))))
                                                  : data.status == "conpleted"
                                                      ? Container(decoration: BoxDecoration(color: AppColors.green, borderRadius: BorderRadius.circular(5)), child: Padding(padding: const EdgeInsets.symmetric(horizontal: 8), child: Text(data.status, style: GoogleFonts.agbalumo(color: Colors.white))))
                                                      : Text(data.status, style: GoogleFonts.agbalumo(color: Colors.white)),
                                        ]),
                                        trailing: Row(
                                            mainAxisSize: MainAxisSize.min,
                                            children: [
                                              Text("${data.price} \$",
                                                      style:
                                                          GoogleFonts.agbalumo(
                                                              color: AppColors
                                                                  .primaryColor,
                                                              fontSize: 17))
                                                  .animate(
                                                      onPlay: (controller) =>
                                                          controller.repeat())
                                                  .shimmer(
                                                      color:
                                                          Colors.grey.shade200,
                                                      duration: 1.seconds,
                                                      delay:
                                                          (index + 1).seconds),
                                              const Icon(
                                                  Icons
                                                      .arrow_forward_ios_outlined,
                                                  color: Colors.grey)
                                            ]));
                                  }))
                    ]));
    });
  }
}
