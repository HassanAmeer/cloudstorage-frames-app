import '../provider/authVm.dart';
import '../widgets/dotloader.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:provider/provider.dart';
import '../constant/colors.dart';

class NotificationsPage extends StatefulWidget {
  const NotificationsPage({super.key});

  @override
  State<NotificationsPage> createState() => _NotificationsPageState();
}

class _NotificationsPageState extends State<NotificationsPage> {
  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    AuthVm p = Provider.of<AuthVm>(context, listen: false);
    p.getNotify(context);
  }

  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
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
          title: const Text("Notifications",
              style: TextStyle(
                  fontSize: 35,
                  color: AppColors.primaryColor,
                  fontWeight: FontWeight.bold)),
        ),
        body: p.isLoading
            ? const Center(child: DotLoader(color: AppColors.primaryColor))
            : p.notifyList.isEmpty
                ? Center(
                    child: Text("No Notifications",
                            style: GoogleFonts.agbalumo(
                                color: Colors.grey.shade400, fontSize: 20))
                        .animate(onPlay: (controller) => controller.repeat())
                        .shimmer(
                            color: Colors.deepOrange.shade200,
                            duration: 2.seconds),
                  )
                : ListView.separated(
                    itemCount: p.notifyList.length,
                    shrinkWrap: true,
                    separatorBuilder: (BuildContext context, int index) {
                      return const Divider();
                    },
                    itemBuilder: (BuildContext context, int index) {
                      var data = p.notifyList[index];
                      return CupertinoListTile(
                        leading:
                            const Icon(Icons.notifications_active_outlined),
                        title: Text(data.title),
                        subtitle: Text(data.desc),
                        trailing: Text(
                          "${DateTime.parse(data.createdAt)}"
                              .toString()
                              .substring(0, 10),
                          style: TextStyle(color: Colors.grey.shade400),
                        ),
                      );
                    },
                  ),
      );
    });
  }
}
