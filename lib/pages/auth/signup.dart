import 'package:cloudstorage/constant/colors.dart';
import 'package:cloudstorage/pages/auth/login.dart';
import 'package:cloudstorage/provider/authVm.dart';
import 'package:cloudstorage/widgets/dotloader.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:provider/provider.dart';

class SignupPage extends StatefulWidget {
  const SignupPage({super.key});

  @override
  State<SignupPage> createState() => _SignupPageState();
}

class _SignupPageState extends State<SignupPage> {
  TextEditingController nameController = TextEditingController();
  TextEditingController emailController = TextEditingController();
  TextEditingController phoneController = TextEditingController();
  TextEditingController addressontroller = TextEditingController();
  TextEditingController passwordController = TextEditingController();

  bool showPass = false;
  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Scaffold(
        appBar: AppBar(
            leading: IconButton(
                onPressed: () {
                  Navigator.pop(context);
                },
                icon: const Icon(Icons.arrow_back_ios, color: Colors.white)),
            backgroundColor: AppColors.primaryColor,
            title: const Text('Signup', style: TextStyle(color: Colors.white))),
        body: Center(
          child: Padding(
            padding: const EdgeInsets.all(16.0),
            child: SingleChildScrollView(
              controller: ScrollController(),
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Text(
                    "Signup",
                    style: GoogleFonts.agbalumo(
                        color: AppColors.primaryColor,
                        fontSize: 30,
                        letterSpacing: 1),
                  )
                      .animate()
                      .shake()
                      .flipV(duration: 1.seconds, begin: 0.3, end: 0)
                      .shimmer(color: Colors.white, duration: 2.seconds),
                  const SizedBox(height: 20),
                  TextField(
                    controller: nameController,
                    decoration: InputDecoration(
                      hintText: 'Name',
                      prefixIcon:
                          const Icon(Icons.person_4, color: Colors.grey),
                      hintStyle: const TextStyle(color: Colors.grey),
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(13),
                      ),
                    ),
                  ),
                  const SizedBox(height: 20),
                  TextField(
                    controller: emailController,
                    decoration: InputDecoration(
                      hintText: 'Email',
                      prefixIcon: const Icon(Icons.email, color: Colors.grey),
                      hintStyle: const TextStyle(color: Colors.grey),
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(13),
                      ),
                    ),
                  ),
                  const SizedBox(height: 20),
                  TextField(
                    controller: phoneController,
                    decoration: InputDecoration(
                      hintText: 'Phone Number',
                      prefixIcon: const Icon(Icons.phone, color: Colors.grey),
                      hintStyle: const TextStyle(color: Colors.grey),
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(13),
                      ),
                    ),
                  ),
                  const SizedBox(height: 20),
                  TextField(
                    controller: addressontroller,
                    decoration: InputDecoration(
                      hintText: 'Address',
                      prefixIcon:
                          const Icon(Icons.location_city, color: Colors.grey),
                      hintStyle: const TextStyle(color: Colors.grey),
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(10),
                      ),
                    ),
                  ),
                  const SizedBox(height: 20),
                  TextField(
                    controller: passwordController,
                    obscureText: showPass,
                    decoration: InputDecoration(
                      hintText: 'Password',
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
                      prefixIcon:
                          const Icon(Icons.password, color: Colors.grey),
                      hintStyle: const TextStyle(color: Colors.grey),
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(10),
                      ),
                    ),
                  ),
                  const SizedBox(height: 20),
                  SizedBox(
                    width: MediaQuery.of(context).size.width * 0.94,
                    child: ElevatedButton(
                        style: ElevatedButton.styleFrom(
                          shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(10),
                          ),
                          backgroundColor: AppColors.primaryColor,
                        ),
                        onPressed: () {
                          p.signupF(context,
                              email: emailController.text,
                              password: passwordController.text,
                              name: nameController.text,
                              phone: phoneController.text,
                              address: addressontroller.text);
                        },
                        child: p.isLoading == true
                            ? const DotLoader(color: Colors.white)
                            : Text("Signup",
                                    style: GoogleFonts.agbalumo(
                                        color: Colors.white,
                                        letterSpacing: 2,
                                        fontSize: 20))
                                .animate(
                                    onPlay: (controller) => controller.repeat())
                                .shimmer(
                                    duration: const Duration(seconds: 2),
                                    color: Colors.grey)),
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
                                  builder: (context) => const LoginPage()));
                        },
                        child: Text(
                          'Have an account? Login',
                          style: TextStyle(
                              decoration: TextDecoration.underline,
                              color: Colors.blueGrey.shade400),
                        ),
                      ),
                    ],
                  ),
                ],
              ),
            ),
          ),
        ),
      );
    });
  }
}
