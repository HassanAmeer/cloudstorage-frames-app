import 'dart:async';
import 'pages/intro.dart';
import 'storage/config.dart';
import 'constant/colors.dart';
import 'provider/authVm.dart';
import 'pages/auth/login.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:cloudstorage/bottomnavbar.dart';
import 'package:cloudstorage/constant/images.dart';

class SplashPage extends StatefulWidget {
  const SplashPage({super.key});

  @override
  State<SplashPage> createState() => _SplashPageState();
}

class _SplashPageState extends State<SplashPage> {
  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    try {
      var v = await Config().getConfig();
      final user =
          await Provider.of<AuthVm>(context, listen: false).getUserData();
      if (v!.firstTime.toString() == "false") {
        Timer(const Duration(seconds: 3), () async {
          Navigator.of(context).pushReplacement(PageRouteBuilder(
              transitionDuration: const Duration(seconds: 3),
              pageBuilder: (context, animation, secondaryAnimation) =>
                  const IntroPage(),
              transitionsBuilder:
                  (context, animation, secondaryAnimation, child) =>
                      FadeTransition(opacity: animation, child: child)));
        });
      } else if (user != null && user.id.isNotEmpty) {
        Timer(const Duration(seconds: 3), () async {
          Navigator.of(context).pushReplacement(PageRouteBuilder(
              transitionDuration: const Duration(seconds: 3),
              pageBuilder: (context, animation, secondaryAnimation) =>
                  const BottomNavBar(),
              transitionsBuilder:
                  (context, animation, secondaryAnimation, child) =>
                      FadeTransition(opacity: animation, child: child)));
        });
      } else {
        Timer(const Duration(seconds: 3), () async {
          Navigator.of(context).pushReplacement(PageRouteBuilder(
              transitionDuration: const Duration(seconds: 3),
              pageBuilder: (context, animation, secondaryAnimation) =>
                  const LoginPage(),
              transitionsBuilder:
                  (context, animation, secondaryAnimation, child) =>
                      FadeTransition(opacity: animation, child: child)));
        });
      }
    } catch (e) {
      debugPrint("💥 UsergetData on splash Error:$e");
      Timer(const Duration(seconds: 3), () async {
        Navigator.of(context).pushReplacement(PageRouteBuilder(
            transitionDuration: const Duration(seconds: 3),
            pageBuilder: (context, animation, secondaryAnimation) =>
                const IntroPage(),
            transitionsBuilder:
                (context, animation, secondaryAnimation, child) =>
                    FadeTransition(opacity: animation, child: child)));
      });
    }
  }
  // syncFirstF() async {

  //   await Future.delayed(const Duration(seconds: 1));

  //   final prefs = await SharedPreferences.getInstance();

  //   final isFirstTime = prefs.getString("firstTime").toString();

  //   if (isFirstTime == "true") {
  //     await Future.delayed(const Duration(seconds: 1));
  //     Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) {
  //       return const IntroPage();
  //     }));
  //   }

  //   await Future.delayed(const Duration(seconds: 3));
  //   Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) {
  //     return const IntroPage();
  //   }));
  // }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Padding(
        padding: const EdgeInsets.all(14),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          crossAxisAlignment: CrossAxisAlignment.center,
          children: [
            Center(
              child: Image.asset(
                AppImages.icon,
                fit: BoxFit.cover,
                width: 200,
              ),
            ),
            const SizedBox(height: 50),
            SizedBox(
              width: 200,
              child: Opacity(
                opacity: 0.3,
                child: LinearProgressIndicator(
                  color: AppColors.primaryColor,
                  minHeight: 5,
                  backgroundColor: AppColors.primaryColor.withOpacity(0.3),
                ),
              ),
            )
          ],
        ),
      ),
    );
  }
}
