import 'package:storyforgen/pages/auth/forgotpass.dart';

import '../../constant/colors.dart';
import '../../constant/images.dart';
import '../../provider/authVm.dart';
import '../../widgets/dotloader.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';
import 'signup.dart';

class LoginPage extends StatefulWidget {
  const LoginPage({super.key});

  @override
  State<LoginPage> createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  TextEditingController emailController = TextEditingController();
  TextEditingController passwordController = TextEditingController();

  bool showPass = false;
  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
              centerTitle: true,
              automaticallyImplyLeading: false,
              backgroundColor: AppColors.primaryColor,
              title: const Text('Story For Generations',
                  style: TextStyle(color: Colors.white))),
          body: Center(
              child: Padding(
                  padding: const EdgeInsets.all(16.0),
                  child: SingleChildScrollView(
                    controller: ScrollController(),
                    child: Column(
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                          const SizedBox(height: 50),
                          Image.asset(AppImages.icon,
                              width: MediaQuery.of(context).size.width * 0.4),
                          const SizedBox(height: 70),
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
                          TextField(
                              obscureText: showPass,
                              controller: passwordController,
                              decoration: InputDecoration(
                                  hintText: 'Password',
                                  prefixIcon: const Icon(Icons.password,
                                      color: Colors.grey),
                                  suffixIcon: IconButton(
                                      onPressed: () {
                                        setState(() {
                                          showPass = !showPass;
                                        });
                                      },
                                      icon: showPass
                                          ? const Icon(Icons.visibility_off,
                                              color: Colors.grey)
                                          : const Icon(Icons.visibility,
                                              color: Colors.grey)),
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
                                    await p.loginF(context,
                                        email: emailController.text,
                                        password: passwordController.text);
                                  },
                                  child: Padding(
                                      padding: const EdgeInsets.symmetric(
                                          vertical: 7),
                                      child: p.isLoading
                                          ? const DotLoader(color: Colors.white)
                                          : Text("Login",
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
                          SizedBox(height: 5),
                          SizedBox(
                            width: MediaQuery.of(context).size.width * 0.94,
                            child: OutlinedButton(
                                style: OutlinedButton.styleFrom(
                                  side: const BorderSide(
                                      color: Colors.grey, width: 1),
                                  shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(10)),
                                ),
                                onPressed: () async {
                                  await p.loginByGoogleF(context);
                                },
                                child: Row(
                                    mainAxisAlignment: MainAxisAlignment.center,
                                    children: [
                                      Image.asset(
                                          width: 25, AppImages.googleIcon),
                                      const Text("  Google Sign In"),
                                      p.isLoadingForGoogle
                                          ? Padding(
                                              padding: const EdgeInsets.only(
                                                  left: 15),
                                              child: SizedBox(
                                                  width: 20,
                                                  height: 20,
                                                  child:
                                                      CircularProgressIndicator
                                                          .adaptive(
                                                    valueColor:
                                                        AlwaysStoppedAnimation(
                                                            Colors.grey),
                                                    strokeWidth: 2,
                                                  )),
                                            )
                                          : SizedBox.shrink()
                                    ])),
                          ),
                          const SizedBox(height: 20),
                          Row(
                              mainAxisAlignment: MainAxisAlignment.end,
                              children: [
                                TextButton(
                                    onPressed: () {
                                      Navigator.push(
                                          context,
                                          MaterialPageRoute(
                                              builder: (context) =>
                                                  const ForgotPasswordPage()));
                                    },
                                    child: Text('Forgot Password',
                                        style: TextStyle(
                                            decoration:
                                                TextDecoration.underline,
                                            color: Colors.blueGrey.shade400)))
                              ]),
                          const SizedBox(height: 80),
                          Row(
                              mainAxisAlignment: MainAxisAlignment.center,
                              children: [
                                TextButton(
                                    onPressed: () {
                                      Navigator.push(
                                          context,
                                          MaterialPageRoute(
                                              builder: (context) =>
                                                  const SignupPage()));
                                    },
                                    child: Text('No account? Sign up',
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
