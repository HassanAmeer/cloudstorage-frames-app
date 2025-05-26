import 'package:storyforgen/models/notifyModel.dart';

import '../provider/authVm.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../constant/colors.dart';

class NotificationsDetailsPage extends StatelessWidget {
  final NotifyModel data;
  const NotificationsDetailsPage({super.key, required this.data});

  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
            leading: IconButton(
                onPressed: () {
                  Navigator.pop(context);
                },
                icon: const Icon(
                  Icons.arrow_back_ios,
                  color: AppColors.primaryColor,
                )),
            backgroundColor: AppColors.primaryColor.withOpacity(0.1),
            title: Text(data.title,
                style: TextStyle(
                    fontSize: 18,
                    color: AppColors.primaryColor,
                    fontWeight: FontWeight.bold)),
          ),
          body: Column(
            mainAxisAlignment: MainAxisAlignment.start,
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              // const SizedBox(height: 20),
              CupertinoListTile(
                title: Text("Date",
                    style: TextStyle(
                        fontSize: 16,
                        color: Colors.grey.shade400,
                        fontWeight: FontWeight.w400)),
                trailing: Text(
                    data.createdAt.isNotEmpty ? data.createdAt.substring(0, 19) : DateTime.now().toString().substring(0, 19),
                    style: TextStyle(
                        fontSize: 18,
                        color: AppColors.primaryColor,
                        fontWeight: FontWeight.w300)),
              ),
              Divider(height: 10, color: Colors.grey.shade300),
              const SizedBox(height: 20),
              Padding(
                padding: const EdgeInsets.only(left: 14),
                child: Text(data.title,
                    style: TextStyle(
                        fontSize: 17,
                        color: AppColors.primaryColor,
                        fontWeight: FontWeight.w500)),
              ),
              const SizedBox(height: 5),
              Padding(
                padding: const EdgeInsets.only(left: 14),
                child: Text(data.desc,
                    style: TextStyle(
                        fontSize: 15,
                        color: Colors.grey.shade500,
                        fontWeight: FontWeight.w400)),
              ),
            ],
          ));
    });
  }
}
