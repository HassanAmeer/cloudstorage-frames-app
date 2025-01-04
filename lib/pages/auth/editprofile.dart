import 'dart:io';

import 'package:cached_network_image/cached_network_image.dart';
import 'package:cloudstorage/constant/colors.dart';
import 'package:cloudstorage/constant/images.dart';
import 'package:cloudstorage/constant/links.dart';
import 'package:cloudstorage/provider/authVm.dart';
import 'package:cloudstorage/widgets/dotloader.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:image_picker/image_picker.dart';
import 'package:provider/provider.dart';

class EditProfile extends StatefulWidget {
  const EditProfile({super.key});

  @override
  State<EditProfile> createState() => _EditProfileState();
}

class _EditProfileState extends State<EditProfile> {
  TextEditingController nameController = TextEditingController();
  TextEditingController emailController = TextEditingController();
  TextEditingController phoneController = TextEditingController();
  TextEditingController addressController = TextEditingController();
  TextEditingController passwordController = TextEditingController();

  bool showPass = false;
  String profileImg = "";

  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    final authVm = Provider.of<AuthVm>(context, listen: false);
    authVm.getUserData();
    nameController.text = authVm.userProfile.name;
    emailController.text = authVm.userProfile.email;
    phoneController.text = authVm.userProfile.phone;
    addressController.text = authVm.userProfile.address;
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
                icon: const Icon(Icons.arrow_back_ios, color: Colors.white)),
            backgroundColor: AppColors.primaryColor,
            title:
                const Text('Profile', style: TextStyle(color: Colors.white))),
        body: Center(
          child: Padding(
            padding: const EdgeInsets.all(16.0),
            child: SingleChildScrollView(
              controller: ScrollController(),
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  InkWell(
                    onTap: () {
                      ImagePicker()
                          .pickImage(source: ImageSource.gallery)
                          .then((value) {
                        if (value != null) {
                          profileImg = value.path;
                          setState(() {});
                        }
                      });
                    },
                    borderRadius: BorderRadius.circular(55),
                    child: Stack(
                      children: [
                        CircleAvatar(
                                radius: 55,
                                backgroundColor: Colors.grey,
                                child: ClipOval(
                                    child: profileImg.isNotEmpty
                                        ? Image.file(File(profileImg),
                                            fit: BoxFit.cover)
                                        : CachedNetworkImage(
                                            imageUrl: ApiLinks.imgLink +
                                                p.userProfile.img,
                                            errorWidget: (context, url,
                                                    error) =>
                                                Image.asset(AppImages.profile),
                                            progressIndicatorBuilder: (context,
                                                    url, progress) =>
                                                const CircularProgressIndicator(
                                                    color:
                                                        AppColors.primaryColor),
                                            fit: BoxFit.cover)))
                            .animate()
                            .shake()
                            .flipV(duration: 1.seconds, begin: 0.3, end: 0)
                            .shimmer(color: Colors.white, duration: 2.seconds),
                        Positioned(
                          bottom: 0,
                          right: 0,
                          child: Container(
                            height: 40,
                            width: 40,
                            decoration: BoxDecoration(
                                borderRadius: BorderRadius.circular(20),
                                color: AppColors.primaryColor.withOpacity(0.7)),
                            child: const Icon(
                              Icons.edit,
                              color: Colors.white,
                            ),
                          ),
                        ),
                      ],
                    ),
                  ),
                  const SizedBox(height: 80),
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
                    controller: addressController,
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
                  // Text("${p.userProfile.token}"),
                  const SizedBox(height: 20),
                  SizedBox(
                    width: MediaQuery.of(context).size.width * 0.95,
                    child: ElevatedButton(
                        style: ElevatedButton.styleFrom(
                          backgroundColor: AppColors.primaryColor,
                          shape: BeveledRectangleBorder(
                            borderRadius: BorderRadius.circular(10),
                          ),
                        ),
                        onPressed: () {
                          p.updateProfileF(context,
                              token: p.userProfile.token,
                              imgPath: profileImg,
                              email: emailController.text,
                              password: passwordController.text,
                              name: nameController.text,
                              phone: phoneController.text,
                              address: addressController.text);
                        },
                        child: p.isLoading == true
                            ? const DotLoader(color: Colors.white)
                            : Text("Update Profile",
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
                ],
              ),
            ),
          ),
        ),
      );
    });
  }
}
