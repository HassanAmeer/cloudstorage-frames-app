import 'package:cached_network_image/cached_network_image.dart';
import 'package:cloudstorage/constant/images.dart';
import 'package:cloudstorage/pages/contactus.dart';
import 'package:cloudstorage/pages/orders.dart';
import 'package:cloudstorage/provider/foldersVm.dart';
import 'package:cloudstorage/widgets/logout.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';

import '../constant/colors.dart';
import '../constant/links.dart';
import '../provider/authVm.dart';
import 'auth/editprofile.dart';

class ProfilePage extends StatelessWidget {
  const ProfilePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Consumer<FoldersVm>(builder: (context, foldervm, c) {
        return Scaffold(
            appBar: AppBar(
                automaticallyImplyLeading: false,
                // leading: IconButton(
                //     onPressed: () {
                //       Navigator.pop(context);
                //     },
                //     icon: const Icon(
                //       Icons.arrow_back_ios,
                //       color: AppColors.primaryColor,
                //     )),
                backgroundColor: AppColors.primaryColor.withOpacity(0.1),
                title: const Text("Profile",
                    style: TextStyle(
                        fontSize: 35,
                        color: AppColors.primaryColor,
                        fontWeight: FontWeight.bold))),
            body: Column(children: [
              const SizedBox(height: 15),
              ListTile(
                  onTap: () {
                    Navigator.push(
                        context,
                        MaterialPageRoute(
                            builder: (context) => const EditProfile()));
                  },
                  leading: CachedNetworkImage(
                      imageUrl: ApiLinks.imgLink + p.userProfile.img,
                      errorWidget: (context, url, error) =>
                          Image.asset(AppImages.profile),
                      progressIndicatorBuilder: (context, url, progress) =>
                          const CircularProgressIndicator(
                              color: AppColors.primaryColor),
                      fit: BoxFit.cover),
                  title: Text(p.userProfile.name,
                      style: const TextStyle(color: Colors.black)),
                  subtitle: Text(p.userProfile.email,
                      style: const TextStyle(color: Colors.grey)),
                  trailing: const Icon(Icons.arrow_forward_ios)),
              // const Divider(),
              // CupertinoListTile(
              //     onTap: () {
              //       Navigator.push(context,
              //           MaterialPageRoute(builder: (context) => PlansPage()));
              //     },
              //     leading: const Icon(Icons.card_membership,
              //         color: AppColors.primaryColor),
              //     title: const Text("My Plan"),
              //     trailing: const Text("Free Trail",
              //         style: TextStyle(color: AppColors.orange))),
              const Divider(),
              CupertinoListTile(
                  onTap: () {
                    Navigator.push(
                        context,
                        MaterialPageRoute(
                            builder: (context) => const OrdersPage()));
                  },
                  leading: const Icon(Icons.shopping_bag,
                      color: AppColors.primaryColor),
                  title: const Text("Orders"),
                  trailing: const Icon(
                    Icons.arrow_forward_ios,
                    color: Colors.grey,
                    size: 17,
                  )),
              const Divider(),
              CupertinoListTile(
                  leading:
                      const Icon(Icons.image, color: AppColors.primaryColor),
                  title: const Text("Total Files"),
                  trailing: Text("${foldervm.allMediaList.length}")),
              const Divider(),
              CupertinoListTile(
                  onTap: () {
                    Navigator.push(
                        context,
                        MaterialPageRoute(
                            builder: (context) => const ConatctUsPage()));
                  },
                  leading: const Icon(Icons.support_agent_rounded,
                      color: AppColors.primaryColor),
                  title: const Text("Contact Us"),
                  trailing: const Icon(Icons.arrow_forward_ios,
                      color: Colors.grey, size: 17)),
              const Divider(),
              CupertinoListTile(
                  onTap: () {
                    Logout().singOut(context);
                  },
                  leading:
                      const Icon(Icons.exit_to_app, color: Colors.deepOrange),
                  title: const Text("Logout"),
                  trailing: const Icon(Icons.arrow_forward_ios,
                      size: 17, color: Colors.grey))
            ]));
      });
    });
  }
}
