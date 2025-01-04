import 'dart:io';

import 'package:cached_network_image/cached_network_image.dart';
import 'package:cloudstorage/constant/colors.dart';
import 'package:cloudstorage/constant/images.dart';
import 'package:cloudstorage/constant/links.dart';
import 'package:cloudstorage/models/folderModel.dart';
import 'package:file_picker/file_picker.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:flutter_easyloading/flutter_easyloading.dart';

import 'editor/slides.dart';

class FolderFiles extends StatefulWidget {
  final FolderModel data;
  const FolderFiles({super.key, required this.data});

  @override
  State<FolderFiles> createState() => _FolderFilesState();
}

class _FolderFilesState extends State<FolderFiles> {
  get decoration => null;

  List imagesList = [
    AppImages.img1,
    AppImages.img2,
    AppImages.img3,
    AppImages.img4,
    AppImages.img5,
    AppImages.video,
  ];

  final List _selectedItems = [];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
            leading: IconButton(
                onPressed: () {
                  Navigator.pop(context);
                },
                icon: const Icon(Icons.arrow_back_ios,
                    color: AppColors.primaryColor)),
            backgroundColor: AppColors.primaryColor.withOpacity(0.3),
            title: Text(widget.data.folderName.toString(),
                style: const TextStyle(
                    fontSize: 35,
                    color: AppColors.primaryColor,
                    fontWeight: FontWeight.bold))),
        bottomNavigationBar: Padding(
            padding: EdgeInsets.symmetric(
                vertical: 14,
                horizontal: MediaQuery.of(context).size.width * 0.15),
            child: SizedBox(
                child: _selectedItems.isNotEmpty
                    ? ElevatedButton.icon(
                        style: ElevatedButton.styleFrom(
                            shape: BeveledRectangleBorder(
                                borderRadius: BorderRadius.circular(13)),
                            backgroundColor: Colors.black),
                        onPressed: () {
                          Navigator.push(
                              context,
                              MaterialPageRoute(
                                  builder: (context) => SlidesPage(
                                      data: widget.data,
                                      imgsList: _selectedItems)));
                        },
                        label: const Text("Edit Images",
                            style:
                                TextStyle(fontSize: 20, color: Colors.white)),
                        icon: const Icon(Icons.edit, color: Colors.white))
                    : ElevatedButton.icon(
                        onPressed: () {
                          showModalBottomSheet(
                              context: context,
                              backgroundColor: Colors.transparent,
                              builder: (BuildContext context) {
                                return ClipRRect(
                                    borderRadius: const BorderRadius.only(
                                        topLeft: Radius.circular(20),
                                        topRight: Radius.circular(20)),
                                    child: Container(
                                        color: Colors.white,
                                        padding: const EdgeInsets.all(16),
                                        height:
                                            MediaQuery.of(context).size.height *
                                                0.35,
                                        child: Column(
                                            mainAxisAlignment:
                                                MainAxisAlignment.center,
                                            children: [
                                              const Text('Upload Media Files',
                                                  style: TextStyle(
                                                      fontSize: 24,
                                                      fontWeight:
                                                          FontWeight.bold,
                                                      color: AppColors
                                                          .primaryColor)),
                                              const SizedBox(height: 20),
                                              Row(
                                                  mainAxisAlignment:
                                                      MainAxisAlignment
                                                          .spaceEvenly,
                                                  children: [
                                                    InkWell(
                                                        onTap: () async {
                                                          // Navigator.pop(context);
                                                          FilePickerResult?
                                                              result =
                                                              await FilePicker.platform.pickFiles(
                                                                  allowMultiple:
                                                                      true,
                                                                  type: FileType
                                                                      .custom,
                                                                  allowedExtensions: [
                                                                'jpg',
                                                                'pdf',
                                                                'doc'
                                                              ]);
                                                          if (result != null) {
                                                            List<File> files = result
                                                                .paths
                                                                .map((path) =>
                                                                    File(path!))
                                                                .toList();
                                                            EasyLoading.showSuccess(
                                                                'Files selected successfully');
                                                          } else {
                                                            EasyLoading.showError(
                                                                'Files not selected');
                                                          }
                                                        },
                                                        child: Container(
                                                            width: MediaQuery.of(
                                                                        context)
                                                                    .size
                                                                    .width *
                                                                0.3,
                                                            decoration: BoxDecoration(
                                                                color: AppColors
                                                                    .primaryColor
                                                                    .withOpacity(
                                                                        0.2),
                                                                borderRadius:
                                                                    BorderRadius.circular(
                                                                        10),
                                                                border: Border.all(
                                                                    color: AppColors
                                                                        .primaryColor,
                                                                    width: 1)),
                                                            child:
                                                                const Padding(
                                                                    padding:
                                                                        EdgeInsets.all(
                                                                            10),
                                                                    child: Column(
                                                                        children: [
                                                                          Icon(
                                                                              Icons.image,
                                                                              size: 40,
                                                                              color: AppColors.primaryColor),
                                                                          SizedBox(
                                                                              height: 8),
                                                                          Text(
                                                                              'Image',
                                                                              style: TextStyle(fontSize: 16, color: AppColors.primaryColor))
                                                                        ])))),
                                                    InkWell(
                                                        onTap: () async {
                                                          // Navigator.pop(context);
                                                          FilePickerResult?
                                                              result =
                                                              await FilePicker.platform.pickFiles(
                                                                  allowMultiple:
                                                                      true,
                                                                  type: FileType
                                                                      .custom,
                                                                  allowedExtensions: [
                                                                'jpg',
                                                                'pdf',
                                                                'doc'
                                                              ]);
                                                          if (result != null) {
                                                            List<File> files = result
                                                                .paths
                                                                .map((path) =>
                                                                    File(path!))
                                                                .toList();
                                                            EasyLoading.showSuccess(
                                                                'Files selected successfully');
                                                          } else {
                                                            EasyLoading.showError(
                                                                'Files not selected');
                                                          }
                                                        },
                                                        child: Container(
                                                            width: MediaQuery.of(
                                                                        context)
                                                                    .size
                                                                    .width *
                                                                0.3,
                                                            decoration: BoxDecoration(
                                                                color: AppColors
                                                                    .primaryColor
                                                                    .withOpacity(
                                                                        0.2),
                                                                borderRadius:
                                                                    BorderRadius.circular(
                                                                        10),
                                                                border: Border.all(
                                                                    color: AppColors
                                                                        .primaryColor,
                                                                    width: 1)),
                                                            child:
                                                                const Padding(
                                                                    padding:
                                                                        EdgeInsets.all(
                                                                            10),
                                                                    child: Column(
                                                                        children: [
                                                                          Icon(
                                                                            Icons.videocam_sharp,
                                                                            size:
                                                                                40,
                                                                            color:
                                                                                AppColors.primaryColor,
                                                                          ),
                                                                          SizedBox(
                                                                              height: 8),
                                                                          Text(
                                                                              'Videos',
                                                                              style: TextStyle(fontSize: 16, color: AppColors.primaryColor))
                                                                        ]))))
                                                  ]),
                                              // const SizedBox(height: 30),
                                              const Spacer(),
                                              SizedBox(
                                                  width: MediaQuery.of(context)
                                                          .size
                                                          .width *
                                                      0.7,
                                                  child: ElevatedButton(
                                                      onPressed: () {
                                                        Navigator.pop(context);
                                                      },
                                                      style: ElevatedButton.styleFrom(
                                                          padding:
                                                              const EdgeInsets.all(
                                                                  10),
                                                          fixedSize: const Size(
                                                              100, 40),
                                                          elevation: 30,
                                                          shadowColor: AppColors
                                                              .primaryColor
                                                              .withOpacity(0.1),
                                                          side: const BorderSide(
                                                              width: 1,
                                                              color: AppColors
                                                                  .primaryColor,
                                                              style: BorderStyle
                                                                  .solid,
                                                              strokeAlign: 0.1),
                                                          shape: const StadiumBorder(
                                                              side: BorderSide.none)),
                                                      child: const Text('Back', style: TextStyle(color: AppColors.primaryColor))))
                                            ])));
                              });
                        },
                        label: const Text("Add New Files",
                            style: TextStyle(color: Colors.white)),
                        icon: const Icon(Icons.add, color: Colors.white),
                        style: ButtonStyle(
                            backgroundColor: WidgetStateProperty.all(
                                AppColors.primaryColor))))),
        body: SingleChildScrollView(
            controller: ScrollController(),
            child: Column(children: [
              Padding(
                  padding: const EdgeInsets.all(20),
                  child: Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: [
                        const Row(
                            mainAxisAlignment: MainAxisAlignment.start,
                            children: [
                              Icon(Icons.folder_copy,
                                  color: AppColors.primaryColor, size: 20),
                              Text("  Folders/  ",
                                  style: TextStyle(
                                      fontSize: 15,
                                      color: AppColors.primaryColor,
                                      fontWeight: FontWeight.bold)),
                              Icon(Icons.file_copy_sharp,
                                  color: AppColors.primaryColor, size: 18),
                              Text(" files/",
                                  style: TextStyle(
                                      fontSize: 15,
                                      color: AppColors.primaryColor,
                                      fontWeight: FontWeight.bold))
                            ]),
                        Text("  ${widget.data.items.length} files ",
                            style: const TextStyle(
                                fontSize: 15,
                                color: AppColors.primaryColor,
                                fontWeight: FontWeight.bold))
                      ])),
              widget.data.items.isEmpty
                  ? Padding(
                      padding: const EdgeInsets.only(top: 200),
                      child: Center(
                          child: Image.asset(AppImages.filesnotfound,
                                  width: 200,
                                  opacity: const AlwaysStoppedAnimation(0.2))
                              .animate(
                                  onPlay: (controller) => controller.repeat())
                              .shader()
                              .shimmer(
                                  color: Colors.grey.shade200,
                                  duration: 3.seconds)))
                  : ListView.separated(
                      itemCount: widget.data.items.length,
                      shrinkWrap: true,
                      controller: ScrollController(),
                      separatorBuilder: (context, index) => const Divider(),
                      physics: const NeverScrollableScrollPhysics(),
                      itemBuilder: (BuildContext context, int index) {
                        var data = widget.data.items[index];
                        return ListTile(
                            onTap: () {
                              showCupertinoDialog(
                                  context: context,
                                  builder: (BuildContext context) {
                                    return CupertinoAlertDialog(
                                        content: SizedBox(
                                            width: 210,
                                            height: 200,
                                            child: CachedNetworkImage(
                                                fit: BoxFit.cover,
                                                imageUrl:
                                                    ApiLinks.imgLink + data,
                                                errorWidget:
                                                    (context, url, error) {
                                                  return Image.asset(
                                                      AppImages.imgnotfound,
                                                      opacity:
                                                          const AlwaysStoppedAnimation(
                                                              0.3));
                                                },
                                                progressIndicatorBuilder: (context,
                                                        url,
                                                        downloadProgress) =>
                                                    Center(
                                                        child: SizedBox(
                                                            width: 50,
                                                            height: 50,
                                                            child: CircularProgressIndicator(
                                                                color: AppColors
                                                                    .primaryColor
                                                                    .shade100,
                                                                value: downloadProgress
                                                                    .progress))))),
                                        actions: [
                                          CupertinoButton(
                                              onPressed: () {
                                                Navigator.pop(context);
                                              },
                                              child: const Text('Close'))
                                        ],
                                        insetAnimationCurve: Curves.slowMiddle,
                                        insetAnimationDuration:
                                            const Duration(seconds: 2));
                                  });
                            },
                            leading: ClipRRect(
                                borderRadius: BorderRadius.circular(6),
                                child: CachedNetworkImage(
                                    imageUrl: ApiLinks.imgLink + data,
                                    width: 50,
                                    height: 50,
                                    fit: BoxFit.cover,
                                    errorWidget: (context, url, error) =>
                                        Image.asset(AppImages.filesnotfound,
                                            opacity:
                                                const AlwaysStoppedAnimation(
                                                    0.4),
                                            fit: BoxFit.cover),
                                    progressIndicatorBuilder:
                                        (context, url, progress) {
                                      return const Padding(
                                          padding: EdgeInsets.all(10),
                                          child: CircularProgressIndicator
                                              .adaptive(
                                                  valueColor:
                                                      AlwaysStoppedAnimation(
                                                          AppColors
                                                              .primaryColor),
                                                  strokeWidth: 1));
                                    })),
                            title: Text(data.split("/").last.toString()),
                            trailing:
                                Row(mainAxisSize: MainAxisSize.min, children: [
                              DropdownButton(
                                  borderRadius: BorderRadius.circular(10),
                                  // hint: const Icon(Icons.more_vert,
                                  //     color: AppColors.primaryColor),
                                  elevation: 0,
                                  // value: 1,
                                  dropdownColor:
                                      AppColors.primaryColor.withOpacity(0.5),
                                  icon: const Icon(Icons.more_vert,
                                      color: AppColors.primaryColor),
                                  underline: const SizedBox.shrink(),
                                  onChanged: (value) {},
                                  items: [
                                    DropdownMenuItem(
                                        value: 2,
                                        onTap: () {
                                          EasyLoading.showProgress(0.7);
                                          EasyLoading.showSuccess(
                                              "Folder Deleted");
                                        },
                                        child: const Text('Delete Folder '))
                                  ]),
                              const SizedBox(width: 10),
                              SizedBox(
                                  width: 10,
                                  child: Checkbox(
                                      value: _selectedItems.contains(data),
                                      onChanged: (value) {
                                        setState(() {
                                          if (value!) {
                                            _selectedItems.add(data);
                                          } else {
                                            _selectedItems.remove(data);
                                          }
                                        });
                                      }))
                            ]));
                      })
            ])));
  }
}
////floatin
