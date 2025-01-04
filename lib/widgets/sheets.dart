import 'dart:io';

import 'package:cloudstorage/constant/images.dart';
import 'package:cloudstorage/widgets/dotloader.dart';
import 'package:cloudstorage/widgets/toast.dart';
import 'package:file_picker/file_picker.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:flutter_easyloading/flutter_easyloading.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:provider/provider.dart';
import 'package:share_plus/share_plus.dart';

import '../constant/colors.dart';
import '../models/folderModel.dart';
import '../provider/authVm.dart';
import '../provider/foldersVm.dart';

class Galert extends StatefulWidget {
  final Function onTap;
  const Galert({Key? key, required this.onTap}) : super(key: key);

  @override
  State<Galert> createState() => _GalertState();
}

class _GalertState extends State<Galert> {
  final primaryColor = const Color(0xff4338CA);
  final secondaryColor = const Color(0xff6D28D9);
  final accentColor = const Color(0xffffffff);
  final backgroundColor = const Color(0xffffffff);
  final errorColor = const Color(0xffEF4444);

  TextEditingController folderNameContr = TextEditingController();

  bool isNameEmpty = false;
  @override
  Widget build(BuildContext context) {
    return Dialog(
        elevation: 1,
        shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(15)),
        child: Container(
            width: MediaQuery.of(context).size.width / 1.5,
            height: MediaQuery.of(context).size.height / 3.8,
            decoration: BoxDecoration(
                gradient:
                    LinearGradient(colors: [primaryColor, secondaryColor]),
                borderRadius: BorderRadius.circular(15.0),
                boxShadow: [
                  BoxShadow(
                      offset: const Offset(12, 26),
                      blurRadius: 50,
                      spreadRadius: 0,
                      color: Colors.grey.withOpacity(.1))
                ]),
            child:
                Column(mainAxisAlignment: MainAxisAlignment.center, children: [
              Row(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    const Text(""),
                    const Text(""),
                    CircleAvatar(
                        backgroundColor: accentColor.withOpacity(0.1),
                        radius: 40,
                        child: Image.asset(AppImages.createfolder)),
                    Transform.translate(
                        offset: const Offset(5, -15),
                        child: IconButton(
                            onPressed: () {
                              Navigator.pop(context);
                            },
                            icon: Icon(Icons.cancel,
                                color: accentColor.withOpacity(0.3))))
                  ]),
              const SizedBox(height: 15),
              Padding(
                  padding: const EdgeInsets.all(10),
                  child: CupertinoTextField(
                      onChanged: (v) {
                        if (v.trim().isEmpty) {
                          isNameEmpty = true;
                          setState(() {});
                        } else {
                          isNameEmpty = false;
                          setState(() {});
                        }
                      },
                      controller: folderNameContr,
                      cursorColor: Colors.cyan,
                      style: TextStyle(color: accentColor),
                      decoration: BoxDecoration(
                          border:
                              Border.all(color: accentColor.withOpacity(0.5)),
                          color: accentColor.withOpacity(0.1),
                          borderRadius: BorderRadius.circular(15)),
                      padding: const EdgeInsets.all(10),
                      placeholder: 'Folder Name',
                      placeholderStyle:
                          TextStyle(color: accentColor.withOpacity(0.5)))),
              isNameEmpty
                  ? Row(children: [
                      Text("      Folder Name is required",
                              style: GoogleFonts.abhayaLibre(
                                  color:
                                      const Color.fromARGB(255, 247, 138, 175),
                                  fontWeight: FontWeight.w200))
                          .animate(onPlay: (controller) => controller.repeat())
                          .shimmer(color: Colors.white, duration: 2.seconds)
                    ])
                  : const SizedBox.shrink(),
              SizedBox(
                  width: MediaQuery.of(context).size.width / 1.58,
                  child: OutlinedButton.icon(
                      onPressed: () {
                        if (folderNameContr.text.isEmpty) {
                          snackBarColorF("Folder Name is required", context);
                          isNameEmpty = true;
                          setState(() {});
                          return;
                        }
                        widget.onTap(folderNameContr.text);
                      },
                      label: Text("Create Folder",
                          style: TextStyle(color: accentColor)),
                      icon: Icon(Icons.create_new_folder_outlined,
                          color: accentColor)))
            ])));
  }
}

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

Future<void> optionsSheet(context, {required FolderModel folderData}) async {
  const primaryColor = Color(0xff4338CA);
  const secondaryColor = Color(0xff6D28D9);
  const accentColor = Color(0xffffffff);
  // const backgroundColor = Color(0xffffffff);
  // const errorColor = Color(0xffEF4444);
  await showModalBottomSheet<void>(
      context: context,
      builder: (BuildContext context) {
        return Container(
            decoration: BoxDecoration(
                gradient: const LinearGradient(
                    colors: [primaryColor, secondaryColor]),
                borderRadius: const BorderRadius.only(
                    topLeft: Radius.circular(10),
                    topRight: Radius.circular(10)),
                boxShadow: [
                  BoxShadow(
                      offset: const Offset(12, 26),
                      blurRadius: 50,
                      spreadRadius: 0,
                      color: Colors.grey.withOpacity(.1))
                ]),
            // height: 200,
            child: Column(mainAxisSize: MainAxisSize.min, children: [
              const Center(
                child: Icon(
                  Icons.horizontal_rule_outlined,
                  color: Colors.white,
                ),
              ),
              ListTile(
                  onTap: () async {
                    await Share.share(" ${folderData.folderId} ",
                        subject: 'Share Folder!');
                  },
                  tileColor: Colors.transparent,
                  leading: const Icon(Icons.share, color: accentColor),
                  title:
                      const Text("Share", style: TextStyle(color: accentColor)),
                  trailing: const Icon(Icons.arrow_forward_ios_sharp,
                      color: Colors.grey)),
              const Divider(height: 1, color: Colors.grey),
              ListTile(
                  onTap: () {
                    Navigator.pop(context);
                    renameFolderSheet(context, folderData: folderData);
                  },
                  tileColor: Colors.transparent,
                  leading: const Icon(Icons.edit, color: accentColor),
                  title: const Text("Rename Folder",
                      style: TextStyle(color: accentColor)),
                  trailing: const Icon(Icons.arrow_forward_ios_sharp,
                      color: Colors.grey)),
              const Divider(height: 1, color: Colors.grey),
              ListTile(
                  onTap: () async {
                    Navigator.pop(context);
                    await Provider.of<FoldersVm>(context, listen: false)
                        .deleteFolderF(context,
                            token: Provider.of<AuthVm>(context, listen: false)
                                .userProfile
                                .token,
                            folderId: folderData.id);
                  },
                  tileColor: Colors.transparent,
                  leading: const Icon(Icons.delete, color: accentColor),
                  title: Row(children: [
                    const Text("Delete", style: TextStyle(color: accentColor)),
                    Text("  ${folderData.folderName}",
                        style: const TextStyle(color: Colors.grey))
                  ]),
                  trailing: const Icon(Icons.arrow_forward_ios_sharp,
                      color: Colors.grey)),
              const Divider(height: 1, color: Colors.grey),
              ListTile(
                  onTap: () {},
                  tileColor: Colors.transparent,
                  leading: const Icon(Icons.info, color: accentColor),
                  title: const Text("Folder Size",
                      style: TextStyle(color: accentColor)),
                  trailing: Text("${folderData.folderUsedSpace} MB",
                      style: const TextStyle(color: Colors.grey))),
              // const Divider(height: 1, color: Colors.grey),
            ]));
      });
}

Future<void> renameFolderSheet(context,
    {required FolderModel folderData}) async {
  const primaryColor = Color(0xff4338CA);
  const secondaryColor = Color(0xff6D28D9);
  const accentColor = Color(0xffffffff);
  // const backgroundColor = Color(0xffffffff);
  // const errorColor = Color(0xffEF4444);
  bool isNameEmpty = false;
  TextEditingController folderNameContr =
      TextEditingController(text: folderData.folderName);
  await showModalBottomSheet<void>(
      context: context,
      builder: (BuildContext context) {
        return Consumer<FoldersVm>(builder: (context, p, c) {
          return Container(
              decoration: BoxDecoration(
                  gradient: const LinearGradient(
                      colors: [primaryColor, secondaryColor]),
                  borderRadius: const BorderRadius.only(
                      topLeft: Radius.circular(10),
                      topRight: Radius.circular(10)),
                  boxShadow: [
                    BoxShadow(
                        offset: const Offset(12, 26),
                        blurRadius: 50,
                        spreadRadius: 0,
                        color: Colors.grey.withOpacity(.1))
                  ]),
              // height: 200,
              child: Column(mainAxisSize: MainAxisSize.min, children: [
                const Center(
                  child: Icon(
                    Icons.horizontal_rule_outlined,
                    color: Colors.white,
                  ),
                ),
                const SizedBox(height: 15),
                Padding(
                    padding: const EdgeInsets.all(10),
                    child: CupertinoTextField(
                        onChanged: (v) {
                          if (v.trim().isEmpty) {
                            isNameEmpty = true;
                          } else {
                            isNameEmpty = false;
                          }
                        },
                        controller: folderNameContr,
                        cursorColor: Colors.cyan,
                        style: const TextStyle(color: accentColor),
                        decoration: BoxDecoration(
                            border:
                                Border.all(color: accentColor.withOpacity(0.5)),
                            color: accentColor.withOpacity(0.1),
                            borderRadius: BorderRadius.circular(15)),
                        padding: const EdgeInsets.all(10),
                        placeholder: 'Folder Name',
                        placeholderStyle:
                            TextStyle(color: accentColor.withOpacity(0.5)))),
                SizedBox(
                    width: MediaQuery.of(context).size.width * 0.95,
                    child: ElevatedButton.icon(
                        onPressed: () async {
                          if (folderNameContr.text.isEmpty) {
                            snackBarColorF("Folder Name is required", context);
                            isNameEmpty = true;
                            return;
                          }

                          await p.renameFolderF(context,
                              token: Provider.of<AuthVm>(context, listen: false)
                                  .userProfile
                                  .token,
                              folderId: folderData.id,
                              folderName: folderNameContr.text);
                        },
                        label: p.isLoadingForRename
                            ? const DotLoader(color: primaryColor)
                            : const Text("Change Folder Name",
                                style: TextStyle(color: primaryColor)),
                        icon: const Icon(Icons.edit, color: primaryColor))),
                const SizedBox(height: 20),
              ]));
        });
      });
}

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
Future<void> pickMultipleFilesSheet(context, {required String folderId}) async {
  const primaryColor = Color(0xff4338CA);
  const secondaryColor = Color(0xff6D28D9);
  const accentColor = Color(0xffffffff);
  List<PlatformFile> selectedFiles = [];
  final filesContr = TextEditingController();

  await showModalBottomSheet<void>(
      context: context,
      builder: (BuildContext context) {
        return StatefulBuilder(
          builder: (BuildContext context, StateSetter setState) {
            return Container(
                decoration: BoxDecoration(
                    gradient: const LinearGradient(
                        colors: [primaryColor, secondaryColor]),
                    borderRadius: const BorderRadius.only(
                        topLeft: Radius.circular(10),
                        topRight: Radius.circular(10)),
                    boxShadow: [
                      BoxShadow(
                          offset: const Offset(12, 26),
                          blurRadius: 50,
                          spreadRadius: 0,
                          color: Colors.grey.withOpacity(.1))
                    ]),
                child: Column(mainAxisSize: MainAxisSize.min, children: [
                  const Center(
                    child: Icon(
                      Icons.horizontal_rule_outlined,
                      color: Colors.white,
                    ),
                  ),
                  const SizedBox(height: 10),
                  if (selectedFiles.isNotEmpty)
                    Expanded(
                        child: ListView.builder(
                            itemCount: selectedFiles.length,
                            itemBuilder: (context, index) {
                              return ListTile(
                                  leading: Image.file(
                                      width: 55,
                                      File(selectedFiles[index]
                                          .path
                                          .toString())),
                                  title: Text(selectedFiles[index].name,
                                      style:
                                          const TextStyle(color: Colors.white)),
                                  trailing: IconButton(
                                      icon: Icon(Icons.delete,
                                          color: Colors.red.shade300),
                                      onPressed: () {
                                        setState(() {
                                          selectedFiles.removeAt(index);
                                          filesContr.text =
                                              "${selectedFiles.length} Files Selected";
                                        });
                                      }));
                            })),
                  const SizedBox(height: 15),
                  SizedBox(
                      width: MediaQuery.of(context).size.width * 0.95,
                      child: OutlinedButton.icon(
                          onPressed: () async {
                            final FilePickerResult? selected =
                                await FilePicker.platform.pickFiles(
                                    type: FileType.image, allowMultiple: true);
                            if (selected != null) {
                              setState(() {
                                selectedFiles.addAll(selected.files);
                                filesContr.text =
                                    "${selectedFiles.length} Files Selected";
                              });
                            }
                          },
                          label: Row(
                              mainAxisAlignment: MainAxisAlignment.center,
                              children: [
                                const Text("Select Files",
                                    style: TextStyle(color: accentColor)),
                                Text(
                                    filesContr.text.isNotEmpty
                                        ? "  (${filesContr.text})"
                                        : "",
                                    style: const TextStyle(color: accentColor))
                              ]),
                          icon: const Icon(Icons.attach_file,
                              color: accentColor))),
                  const SizedBox(height: 10),
                  SizedBox(
                    width: MediaQuery.of(context).size.width * 0.95,
                    child: ElevatedButton.icon(
                        onPressed: () async {
                          if (selectedFiles.isEmpty) {
                            EasyLoading.showError("No Files Selected");
                            return;
                          }
                          Navigator.pop(context);
                          await Provider.of<FoldersVm>(context, listen: false)
                              .uploadFilesF(context,
                                  token: Provider.of<AuthVm>(context,
                                          listen: false)
                                      .userProfile
                                      .token,
                                  files: selectedFiles,
                                  folderId: folderId);
                        },
                        label: const Text("Upload Files",
                            style: TextStyle(color: primaryColor)),
                        icon: const Icon(Icons.cloud_upload,
                            color: primaryColor)),
                  ),
                  const SizedBox(height: 20),
                ]));
          },
        );
      });
}

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

///// not used
pickImagesSheetF(context) {
  showModalBottomSheet(
      context: context,
      backgroundColor: Colors.transparent,
      builder: (BuildContext context) {
        return ClipRRect(
            borderRadius: const BorderRadius.only(
                topLeft: Radius.circular(20), topRight: Radius.circular(20)),
            child: Container(
                color: Colors.white,
                padding: const EdgeInsets.all(16),
                height: MediaQuery.of(context).size.height * 0.35,
                child: Column(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                      const Text('Upload Media Files',
                          style: TextStyle(
                              fontSize: 24,
                              fontWeight: FontWeight.bold,
                              color: AppColors.primaryColor)),
                      const SizedBox(height: 20),
                      Row(
                          mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                          children: [
                            InkWell(
                                onTap: () async {
                                  // Navigator.pop(context);
                                  FilePickerResult? result =
                                      await FilePicker.platform.pickFiles(
                                          allowMultiple: true,
                                          type: FileType.custom,
                                          allowedExtensions: [
                                        'jpg',
                                        'pdf',
                                        'doc'
                                      ]);
                                  if (result != null) {
                                    List<File> files = result.paths
                                        .map((path) => File(path!))
                                        .toList();
                                    EasyLoading.showSuccess(
                                        'Files selected successfully');
                                  } else {
                                    EasyLoading.showError('Files not selected');
                                  }
                                },
                                child: Container(
                                    width:
                                        MediaQuery.of(context).size.width * 0.3,
                                    decoration: BoxDecoration(
                                        color: AppColors.primaryColor
                                            .withOpacity(0.2),
                                        borderRadius: BorderRadius.circular(10),
                                        border: Border.all(
                                            color: AppColors.primaryColor,
                                            width: 1)),
                                    child: const Padding(
                                        padding: EdgeInsets.all(10),
                                        child: Column(children: [
                                          Icon(Icons.image,
                                              size: 40,
                                              color: AppColors.primaryColor),
                                          SizedBox(height: 8),
                                          Text('Image',
                                              style: TextStyle(
                                                  fontSize: 16,
                                                  color:
                                                      AppColors.primaryColor))
                                        ])))),
                            InkWell(
                                onTap: () async {
                                  // Navigator.pop(context);
                                  FilePickerResult? result =
                                      await FilePicker.platform.pickFiles(
                                          allowMultiple: true,
                                          type: FileType.custom,
                                          allowedExtensions: [
                                        'jpg',
                                        'pdf',
                                        'doc'
                                      ]);
                                  if (result != null) {
                                    List<File> files = result.paths
                                        .map((path) => File(path!))
                                        .toList();
                                    EasyLoading.showSuccess(
                                        'Files selected successfully');
                                  } else {
                                    EasyLoading.showError('Files not selected');
                                  }
                                },
                                child: Container(
                                    width:
                                        MediaQuery.of(context).size.width * 0.3,
                                    decoration: BoxDecoration(
                                        color: AppColors.primaryColor
                                            .withOpacity(0.2),
                                        borderRadius: BorderRadius.circular(10),
                                        border: Border.all(
                                            color: AppColors.primaryColor,
                                            width: 1)),
                                    child: const Padding(
                                        padding: EdgeInsets.all(10),
                                        child: Column(children: [
                                          Icon(
                                            Icons.videocam_sharp,
                                            size: 40,
                                            color: AppColors.primaryColor,
                                          ),
                                          SizedBox(height: 8),
                                          Text('Videos',
                                              style: TextStyle(
                                                  fontSize: 16,
                                                  color:
                                                      AppColors.primaryColor))
                                        ]))))
                          ]),
                      // const SizedBox(height: 30),
                      const Spacer(),
                      SizedBox(
                          width: MediaQuery.of(context).size.width * 0.7,
                          child: ElevatedButton(
                              onPressed: () {
                                Navigator.pop(context);
                              },
                              style: ElevatedButton.styleFrom(
                                  padding: const EdgeInsets.all(10),
                                  fixedSize: const Size(100, 40),
                                  elevation: 30,
                                  shadowColor:
                                      AppColors.primaryColor.withOpacity(0.1),
                                  side: const BorderSide(
                                      width: 1,
                                      color: AppColors.primaryColor,
                                      style: BorderStyle.solid,
                                      strokeAlign: 0.1),
                                  shape: const StadiumBorder(
                                      side: BorderSide.none)),
                              child: const Text('Back',
                                  style: TextStyle(
                                      color: AppColors.primaryColor))))
                    ])));
      });
}
