import 'dart:async';
import 'package:animated_bottom_navigation_bar/animated_bottom_navigation_bar.dart';
import 'package:storyforgen/constant/colors.dart';
import 'package:storyforgen/constant/images.dart';
import 'package:storyforgen/pages/orders.dart';
import 'package:storyforgen/widgets/logout.dart';
import 'package:flutter/material.dart';
import 'package:flutter/rendering.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:provider/provider.dart';

import 'pages/folderspage.dart';
import 'pages/homepage.dart';
import 'pages/notify.dart';
import 'pages/profile.dart';
import 'provider/authVm.dart';

class BottomNavBar extends StatefulWidget {
  const BottomNavBar({
    super.key,
  });

  @override
  _BottomNavBarState createState() => _BottomNavBarState();
}

class _BottomNavBarState extends State<BottomNavBar>
    with TickerProviderStateMixin {
  var _bottomNavIndex = 0; //default index of a first screen

  late AnimationController _fabAnimationController;
  late AnimationController _borderRadiusAnimationController;
  late Animation<double> fabAnimation;
  late Animation<double> borderRadiusAnimation;
  late CurvedAnimation fabCurve;
  late CurvedAnimation borderRadiusCurve;
  late AnimationController _hideBottomBarAnimationController;

  List pagesList = [
    const HomePage(),
    const FoldersPage(),
    const NotificationsPage(),
    const ProfilePage(),
  ];
  final iconList = <IconData>[
    Icons.photo_camera_back,
    Icons.folder_copy,
    Icons.notifications_active,
    Icons.person_4_outlined,
  ];
  final iconNamesList = <String>[
    "Photos",
    "Folders",
    "ALERTs",
    "Profile",
  ];

  @override
  void initState() {
    super.initState();
    syncFirstF();

    _fabAnimationController = AnimationController(
      duration: const Duration(milliseconds: 500),
      vsync: this,
    );
    _borderRadiusAnimationController = AnimationController(
      duration: const Duration(milliseconds: 500),
      vsync: this,
    );
    fabCurve = CurvedAnimation(
      parent: _fabAnimationController,
      curve: const Interval(0.5, 1.0, curve: Curves.fastOutSlowIn),
    );
    borderRadiusCurve = CurvedAnimation(
      parent: _borderRadiusAnimationController,
      curve: const Interval(0.5, 1.0, curve: Curves.fastOutSlowIn),
    );

    fabAnimation = Tween<double>(begin: 0, end: 1).animate(fabCurve);
    borderRadiusAnimation = Tween<double>(begin: 0, end: 1).animate(
      borderRadiusCurve,
    );

    _hideBottomBarAnimationController = AnimationController(
      duration: const Duration(milliseconds: 200),
      vsync: this,
    );

    Future.delayed(
      const Duration(seconds: 1),
      () => _fabAnimationController.forward(),
    );
    Future.delayed(
      const Duration(seconds: 1),
      () => _borderRadiusAnimationController.forward(),
    );
  }

  bool onScrollNotification(ScrollNotification notification) {
    if (notification is UserScrollNotification &&
        notification.metrics.axis == Axis.vertical) {
      switch (notification.direction) {
        case ScrollDirection.forward:
          _hideBottomBarAnimationController.reverse();
          _fabAnimationController.forward(from: 0);
          break;
        case ScrollDirection.reverse:
          _hideBottomBarAnimationController.forward();
          _fabAnimationController.reverse(from: 1);
          break;
        case ScrollDirection.idle:
          break;
      }
    }
    return false;
  }

  syncFirstF() async {
    final authVm = Provider.of<AuthVm>(context, listen: false);
    authVm.getUserData();
  }

  @override
  Widget build(BuildContext context) {
    return WillPopScope(
      onWillPop: () async {
        if (_bottomNavIndex == 0) {
          Logout().exitDialoge(context);
        } else {
          _bottomNavIndex = 0;
          setState(() {});
        }
        return false;
      },
      child: Scaffold(
        extendBody: true,
        appBar: _bottomNavIndex == 0
            ? AppBar(
                // backgroundColor: AppColors.primaryColor.withOpacity(0.1),
                leading: Padding(
                    padding: const EdgeInsets.all(6),
                    child: Container(
                        decoration: BoxDecoration(
                            color: AppColors.orange,
                            borderRadius: BorderRadius.circular(10)),
                        child: Center(
                            child: Text(
                                context
                                    .watch<AuthVm>()
                                    .userProfile
                                    .name
                                    .toUpperCase()[0],
                                style: GoogleFonts.agbalumo(
                                    fontWeight: FontWeight.bold,
                                    color: Colors.white,
                                    fontSize: 18))))),
                // title: Container(
                //   decoration: BoxDecoration(
                //     color: AppColors.primaryColor,
                //     borderRadius: BorderRadius.circular(25),
                //   ),
                //   child: const Padding(
                //     padding: EdgeInsets.all(8.0),
                //     child: Text(
                //       " Plan 20 GB ",
                //       style: TextStyle(color: Colors.white),
                //     ),
                //   ),
                // ),
                actions: [
                    Padding(
                        padding: const EdgeInsets.all(8.0),
                        child: IconButton.filled(
                            style: ButtonStyle(
                                backgroundColor: WidgetStateProperty.all(
                                    AppColors.primaryColor)),
                            color: Colors.black,
                            onPressed: () {
                              Navigator.push(
                                  context,
                                  MaterialPageRoute(
                                      builder: (context) =>
                                          const ProfilePage()));
                            },
                            icon: const Icon(Icons.person_4,
                                color: Colors.white)))
                  ])
            : null,
        body: NotificationListener<ScrollNotification>(
          onNotification: onScrollNotification,
          child: pagesList[_bottomNavIndex],
          // child: NavigationScreen(pagesList[_bottomNavIndex]),
        ),
        floatingActionButton: FloatingActionButton(
            backgroundColor: Colors.transparent,
            // backgroundColor: AppColors.primaryColor.shade900.withOpacity(0.8),
            shape:
                RoundedRectangleBorder(borderRadius: BorderRadius.circular(50)),
            onPressed: () {
              // _bottomNavIndex = 1;
              // setState(() {});
              Navigator.push(context,
                  MaterialPageRoute(builder: (context) => const OrdersPage()));

              // UploadMediaPage();
              // _fabAnimationController.reset();
              // _borderRadiusAnimationController.reset();
              // _borderRadiusAnimationController.forward();
              // _fabAnimationController.forward();
            },
            child: Image.asset(AppImages.mid, height: 55, width: 55)),
        floatingActionButtonLocation: FloatingActionButtonLocation.centerDocked,
        bottomNavigationBar: AnimatedBottomNavigationBar.builder(
          itemCount: iconList.length,
          tabBuilder: (int index, bool isActive) {
            final color = isActive
                ? AppColors.primaryColor
                : AppColors.primaryColor.shade100.withOpacity(0.8);
            return Column(
                mainAxisSize: MainAxisSize.min,
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Icon(iconList[index], size: 24, color: color),
                  const SizedBox(height: 3),
                  Text(iconNamesList[index],
                      maxLines: 1, style: TextStyle(color: color))
                ]);
          },
          backgroundColor: Colors.white,
          activeIndex: _bottomNavIndex,
          notchAndCornersAnimation: borderRadiusAnimation,
          splashSpeedInMilliseconds: 300,
          notchSmoothness: NotchSmoothness.defaultEdge,
          gapLocation: GapLocation.center,
          leftCornerRadius: 15,
          rightCornerRadius: 15,
          onTap: (index) => setState(() => _bottomNavIndex = index),
          hideAnimationController: _hideBottomBarAnimationController,
          // shadow: const BoxShadow(
          //   offset: Offset(0, 1),
          //   blurRadius: 15,
          //   spreadRadius: 0.1,
          //   color: Colors.grey,
          // ),
        ),
      ),
    );
  }
  //////////////////
}
