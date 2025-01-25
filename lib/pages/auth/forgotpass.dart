import 'package:flutter_easyloading/flutter_easyloading.dart';
import 'package:pinput/pinput.dart';
import 'package:storyforgen/pages/auth/login.dart';

import '../../constant/colors.dart';
import '../../constant/images.dart';
import '../../provider/authVm.dart';
import '../../widgets/dotloader.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';
import 'dart:math' as math;

import '../../widgets/toast.dart';
// import 'dart:math';

class ForgotPasswordPage extends StatefulWidget {
  const ForgotPasswordPage({super.key});

  @override
  State<ForgotPasswordPage> createState() => _ForgotPasswordPageState();
}

class _ForgotPasswordPageState extends State<ForgotPasswordPage> {
  TextEditingController emailController = TextEditingController();

  bool showPass = false;
  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
              centerTitle: true,
              automaticallyImplyLeading: false,
              backgroundColor: AppColors.primaryColor,
              title: const Text('RESET PASSWORD ',
                  style: TextStyle(color: Colors.white))),
          body: Center(
              child: Padding(
                  padding: const EdgeInsets.all(16.0),
                  child: SingleChildScrollView(
                    controller: ScrollController(),
                    child: Column(
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                          const SizedBox(height: 20),
                          Image.asset(AppImages.lock,
                              width: MediaQuery.of(context).size.width * 0.4),
                          const SizedBox(height: 50),
                          TextField(
                              controller: emailController,
                              decoration: InputDecoration(
                                  prefixIcon: const Icon(Icons.email,
                                      color: Colors.grey),
                                  hintText: 'Email',
                                  hintStyle:
                                      const TextStyle(color: Colors.grey),
                                  border: OutlineInputBorder(
                                      borderRadius:
                                          BorderRadius.circular(10)))),
                          const SizedBox(height: 20),
                          SizedBox(
                              width: MediaQuery.of(context).size.width * 0.94,
                              child: ElevatedButton(
                                  style: ElevatedButton.styleFrom(
                                      backgroundColor: AppColors.primaryColor,
                                      shape: RoundedRectangleBorder(
                                          borderRadius:
                                              BorderRadius.circular(10))),
                                  onPressed: () async {
                                    if (emailController.text.trim().isEmpty) {
                                      EasyLoading.showError(
                                          "Email is required");
                                      return;
                                    }

                                    var random = math.Random();
                                    var code = random.nextInt(9000) + 1000;
                                    // debugPrint(code.toString());
                                    p
                                        .sendOtpF(context,
                                            email: emailController.text,
                                            code: code.toString())
                                        .then((v) {
                                      if (v) {
                                        Navigator.push(
                                            context,
                                            MaterialPageRoute(
                                                builder: (context) => OTPPage(
                                                    email: emailController.text,
                                                    code: code.toString())));
                                      }
                                    });
                                  },
                                  child: Padding(
                                      padding: const EdgeInsets.symmetric(
                                          vertical: 7),
                                      child: p.isLoading
                                          ? const DotLoader(color: Colors.white)
                                          : Text("Send OTP",
                                                  style: GoogleFonts.agbalumo(
                                                      color: Colors.white,
                                                      letterSpacing: 2,
                                                      fontSize: 20))
                                              .animate(
                                                  onPlay: (controller) =>
                                                      controller.repeat())
                                              .shimmer(
                                                  duration: const Duration(
                                                      seconds: 2),
                                                  color: Colors.grey)))),
                          const SizedBox(height: 10),
                          Row(
                              mainAxisAlignment: MainAxisAlignment.center,
                              children: [
                                TextButton(
                                    onPressed: () {
                                      Navigator.pop(context);
                                    },
                                    child: Text('Back',
                                        style: TextStyle(
                                            decoration:
                                                TextDecoration.underline,
                                            color: Colors.blueGrey.shade200)))
                              ])
                        ]),
                  ))));
    });
  }
}

class OTPPage extends StatefulWidget {
  String code;
  String email;
  OTPPage({super.key, required this.code, required this.email});

  @override
  State<OTPPage> createState() => _OTPPageState();
}

class _OTPPageState extends State<OTPPage> {
  TextEditingController emailController = TextEditingController();
  TextEditingController passwordController = TextEditingController();

  final defaultPinTheme = PinTheme(
      width: 70,
      height: 70,
      textStyle: TextStyle(
          fontSize: 25,
          color: Color.fromRGBO(30, 60, 87, 1),
          fontWeight: FontWeight.w600),
      decoration: BoxDecoration(
          border: Border.all(color: AppColors.indigo.withOpacity(0.4)),
          borderRadius: BorderRadius.circular(14)));
  bool showPass = false;

  bool isPinMatched = false;
  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
              leading: IconButton(
                  onPressed: () {
                    Navigator.pop(context);
                  },
                  icon: Icon(Icons.arrow_back_ios, color: Colors.white)),
              centerTitle: true,
              automaticallyImplyLeading: false,
              backgroundColor: AppColors.primaryColor,
              title: const Text('VERIFY OTTP ',
                  style: TextStyle(color: Colors.white))),
          body: Padding(
              padding: const EdgeInsets.all(10.0),
              child: SingleChildScrollView(
                controller: ScrollController(),
                child: Column(
                    // crossAxisAlignment: CrossAxisAlignment.start,
                    mainAxisAlignment: MainAxisAlignment.start,
                    children: [
                      const SizedBox(height: 50, width: double.infinity),
                      Image.asset(AppImages.otp,
                          width: MediaQuery.of(context).size.width * 0.3),
                      const SizedBox(height: 50),
                      Pinput(
                          defaultPinTheme: defaultPinTheme,
                          focusedPinTheme: defaultPinTheme.copyDecorationWith(
                              border: Border.all(
                                  color: Color.fromRGBO(114, 178, 238, 1)),
                              borderRadius: BorderRadius.circular(8)),
                          submittedPinTheme: defaultPinTheme.copyWith(
                              decoration: defaultPinTheme.decoration!.copyWith(
                            color: Color.fromRGBO(234, 239, 243, 1),
                          )),
                          validator: (v) {
                            return v == widget.code ? null : 'OTP incorrect';
                          },
                          pinputAutovalidateMode:
                              PinputAutovalidateMode.onSubmit,
                          showCursor: true,
                          onCompleted: (pin) {
                            debugPrint(pin);
                            if (pin == widget.code) {
                              isPinMatched = true;
                              setState(() {});

                              Navigator.push(
                                  context,
                                  MaterialPageRoute(
                                      builder: (context) => UpdatePasswordPage(
                                          email: widget.email)));
                            }
                          }),
                      const SizedBox(height: 20),
                      SizedBox(
                          width: MediaQuery.of(context).size.width * 0.8,
                          child: ElevatedButton(
                              style: ElevatedButton.styleFrom(
                                  backgroundColor: AppColors.primaryColor,
                                  shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(10))),
                              onPressed: !isPinMatched
                                  ? null
                                  : () async {
                                      Navigator.push(
                                          context,
                                          MaterialPageRoute(
                                              builder: (context) =>
                                                  UpdatePasswordPage(
                                                      email: widget.email)));
                                    },
                              child: Padding(
                                  padding:
                                      const EdgeInsets.symmetric(vertical: 7),
                                  child: p.isLoading
                                      ? const DotLoader(color: Colors.white)
                                      : Text("Verify",
                                              style: GoogleFonts.agbalumo(
                                                  color: Colors.white,
                                                  letterSpacing: 2,
                                                  fontSize: 20))
                                          .animate(
                                              onPlay: (controller) =>
                                                  controller.repeat())
                                          .shimmer(
                                              duration:
                                                  const Duration(seconds: 2),
                                              color: Colors.grey)))),
                    ]),
              )));
    });
  }
}

class UpdatePasswordPage extends StatefulWidget {
  final String email;
  const UpdatePasswordPage({super.key, required this.email});

  @override
  State<UpdatePasswordPage> createState() => _UpdatePasswordPageState();
}

class _UpdatePasswordPageState extends State<UpdatePasswordPage> {
  TextEditingController passwordController = TextEditingController();
  TextEditingController confirmPasswordController = TextEditingController();

  bool showPass = false;
  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
              centerTitle: true,
              automaticallyImplyLeading: false,
              backgroundColor: AppColors.primaryColor,
              title: const Text('UPDATE PASSWORD ',
                  style: TextStyle(color: Colors.white))),
          body: Center(
              child: Padding(
                  padding: const EdgeInsets.all(16.0),
                  child: SingleChildScrollView(
                    controller: ScrollController(),
                    child: Column(
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                          const SizedBox(height: 20),
                          Image.asset(AppImages.password2,
                              width: MediaQuery.of(context).size.width * 0.4),
                          const SizedBox(height: 50),
                          TextField(
                              controller: passwordController,
                              decoration: InputDecoration(
                                  prefixIcon: const Icon(Icons.email,
                                      color: Colors.grey),
                                  hintText: 'New Password',
                                  hintStyle:
                                      const TextStyle(color: Colors.grey),
                                  border: OutlineInputBorder(
                                      borderRadius:
                                          BorderRadius.circular(10)))),
                          const SizedBox(height: 20),
                          TextField(
                              controller: confirmPasswordController,
                              decoration: InputDecoration(
                                  prefixIcon: const Icon(Icons.email,
                                      color: Colors.grey),
                                  hintText: 'Confirm Password',
                                  hintStyle:
                                      const TextStyle(color: Colors.grey),
                                  border: OutlineInputBorder(
                                      borderRadius:
                                          BorderRadius.circular(10)))),
                          const SizedBox(height: 20),
                          SizedBox(
                              width: MediaQuery.of(context).size.width * 0.94,
                              child: ElevatedButton(
                                  style: ElevatedButton.styleFrom(
                                      backgroundColor: AppColors.primaryColor,
                                      shape: RoundedRectangleBorder(
                                          borderRadius:
                                              BorderRadius.circular(10))),
                                  onPressed: () async {
                                    if (passwordController.text !=
                                        confirmPasswordController.text) {
                                      snackBarColorF(
                                          "Password Must Be Same", context);
                                      return;
                                    }
                                    if (confirmPasswordController.text.length <
                                        8) {
                                      snackBarColorF(
                                          "Password At Least 8 Character",
                                          context);
                                      return;
                                    }
                                    p.updatePsswordF(context,
                                        email: widget.email,
                                        password:
                                            confirmPasswordController.text).then((v){
                                              if(v){

      Navigator.pushReplacement( 
      context, MaterialPageRoute(builder: (context) => const LoginPage())); 
                                              }
                                            });
                                  },
                                  child: Padding(
                                      padding: const EdgeInsets.symmetric(
                                          vertical: 7),
                                      child: p.isLoading
                                          ? const DotLoader(color: Colors.white)
                                          : Text("Update Password",
                                                  style: GoogleFonts.agbalumo(
                                                      color: Colors.white,
                                                      letterSpacing: 2,
                                                      fontSize: 20))
                                              .animate(
                                                  onPlay: (controller) =>
                                                      controller.repeat())
                                              .shimmer(
                                                  duration: const Duration(
                                                      seconds: 2),
                                                  color: Colors.grey))))
                        ]),
                  ))));
    });
  }
}
