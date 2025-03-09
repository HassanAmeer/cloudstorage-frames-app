import '../provider/authVm.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:provider/provider.dart';

import '../constant/colors.dart';
import '../widgets/dotloader.dart';

class ConatctUsPage extends StatefulWidget {
  const ConatctUsPage({super.key});

  @override
  State<ConatctUsPage> createState() => _ConatctUsPageState();
}

class _ConatctUsPageState extends State<ConatctUsPage> {
  TextEditingController nameController = TextEditingController();
  TextEditingController emailController = TextEditingController();
  TextEditingController descController = TextEditingController();

  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    var p = Provider.of<AuthVm>(context, listen: false).userProfile;
    nameController.text = p.name;
    emailController.text = p.email.isEmpty ? "" : p.email;
  }

  @override
  Widget build(BuildContext context) {
    return Consumer<AuthVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
            backgroundColor: AppColors.primaryColor.withOpacity(0.1),
            title: const Text("Contact Us",
                style: TextStyle(
                    fontSize: 20,
                    color: AppColors.primaryColor,
                    fontWeight: FontWeight.bold)),
            leading: IconButton(
                onPressed: () {
                  Navigator.pop(context);
                },
                icon: const Icon(Icons.arrow_back_ios, color: Colors.grey)),
          ),
          body: SingleChildScrollView(
              controller: ScrollController(),
              physics: const BouncingScrollPhysics(),
              child: Padding(
                padding: const EdgeInsets.all(14),
                child: Column(children: [
                  const SizedBox(height: 80),
                  TextField(
                      controller: nameController,
                      decoration: InputDecoration(
                          hintText: 'Name',
                          prefixIcon:
                              const Icon(Icons.person_4, color: Colors.grey),
                          hintStyle: const TextStyle(color: Colors.grey),
                          border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(13)))),
                  const SizedBox(height: 15),
                  TextField(
                      controller: emailController,
                      enabled: false,
                      decoration: InputDecoration(
                          hintText: 'Email',
                          prefixIcon:
                              const Icon(Icons.email, color: Colors.grey),
                          hintStyle: const TextStyle(color: Colors.grey),
                          border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(13)))),
                  const SizedBox(height: 15),
                  TextField(
                      controller: descController,
                      minLines: 5,
                      maxLines: 10,
                      decoration: InputDecoration(
                          hintText: 'Description',
                          // prefixIcon:
                          // const Icon(Icons.person_4, color: Colors.grey),
                          hintStyle: const TextStyle(color: Colors.grey),
                          border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(13)))),
                  const SizedBox(height: 25),

                  SizedBox(
                      width: MediaQuery.of(context).size.width * 0.94,
                      child: ElevatedButton(
                          style: ElevatedButton.styleFrom(
                              backgroundColor: AppColors.primaryColor,
                              shape: RoundedRectangleBorder(
                                  borderRadius: BorderRadius.circular(10))),
                          onPressed: () async {
                            await p.contactUsF(context,
                                name: nameController.text,
                                email: emailController.text,
                                desc: descController.text);
                          },
                          child: Padding(
                              padding: const EdgeInsets.symmetric(vertical: 7),
                              child: p.isLoading
                                  ? const DotLoader(color: Colors.white)
                                  : Row(
                                          mainAxisAlignment:
                                              MainAxisAlignment.center,
                                          crossAxisAlignment:
                                              CrossAxisAlignment.center,
                                          children: [
                                          Text("Submit  ",
                                              style: GoogleFonts.agbalumo(
                                                  color: Colors.white,
                                                  letterSpacing: 2,
                                                  fontSize: 20)),
                                          Builder(builder: (context) {
                                            return Transform.translate(
                                                offset: const Offset(0, 2),
                                                child: const Icon(Icons.send,
                                                    size: 18,
                                                    color: Colors.white));
                                          })
                                        ])
                                      .animate(
                                          onPlay: (controller) =>
                                              controller.repeat())
                                      .shimmer(
                                          duration: const Duration(seconds: 2),
                                          color: Colors.grey)))),
                  /////
                ]),
              )));
    });
  }
}
