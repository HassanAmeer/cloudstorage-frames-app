import 'package:cached_network_image/cached_network_image.dart';
import '../constant/colors.dart';
import '../constant/images.dart';
import '../constant/links.dart';
import '../provider/authVm.dart';
import '../provider/foldersVm.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:provider/provider.dart';

import '../widgets/dotloader.dart';
import '../widgets/sheets.dart';
import 'editor/slides.dart';

class FolderFiles extends StatefulWidget {
  final String folderId;
  final String folderName;
  const FolderFiles(
      {super.key, required this.folderId, required this.folderName});

  @override
  State<FolderFiles> createState() => _FolderFilesState();
}

class _FolderFilesState extends State<FolderFiles> {
  get decoration => null;
  final List _selectedItems = [];

  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    if (Provider.of<FoldersVm>(context, listen: false)
            .getfilesbyfolderidList
            .isEmpty ||
        Provider.of<FoldersVm>(context, listen: false)
                .getfilesbyfolderidList
                .first
                .id
                .toString() !=
            widget.folderId.toString()) {
      await Provider.of<FoldersVm>(context, listen: false).getFilesByFolderId(
          context,
          folderId: widget.folderId.toString(),
          token: Provider.of<AuthVm>(context, listen: false).userProfile.token);
    }
  }

  @override
  Widget build(BuildContext context) {
    return Consumer<FoldersVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
              leading: IconButton(
                  onPressed: () {
                    Navigator.pop(context);
                  },
                  icon: const Icon(Icons.arrow_back_ios,
                      color: AppColors.primaryColor)),
              backgroundColor: AppColors.primaryColor.withOpacity(0.3),
              actions: [
                p.isLoadingForUpload
                    ? const Padding(
                        padding: EdgeInsets.only(right: 10),
                        child: DotLoader(color: AppColors.primaryColor))
                    : const SizedBox.shrink()
              ],
              title: Text(widget.folderName.toString(),
                  style: const TextStyle(
                      fontSize: 25,
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
                              shape: RoundedRectangleBorder(
                                  borderRadius: BorderRadius.circular(13)),
                              backgroundColor: Colors.black),
                          onPressed: () {
                            Navigator.push(
                                context,
                                MaterialPageRoute(
                                    builder: (context) => SlidesPage(
                                        data: p.getfilesbyfolderidList.first,
                                        imgsList: _selectedItems)));
                          },
                          label: const Text("Edit Images",
                              style:
                                  TextStyle(fontSize: 20, color: Colors.white)),
                          icon: const Icon(Icons.edit, color: Colors.white))
                      : ElevatedButton.icon(
                          onPressed: () async {
                            await pickMultipleFilesSheet(context,
                                folderId: widget.folderId.toString());
                            // FilePicker.platform
                            //     .pickFiles(allowMultiple: true)
                            //     .then((value) {
                            //   if (value != null) {
                            //     setState(() {
                            //       for (var i = 0; i < value.files.length; i++) {
                            //         widget.data.items.add(value.files[i].path!);
                            //       }
                            //     });
                            //   }
                            // });
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
                          Row(
                              mainAxisAlignment: MainAxisAlignment.start,
                              children: [
                                const Icon(Icons.folder_copy,
                                    color: AppColors.primaryColor, size: 20),
                                Text("  ${widget.folderName.toString()}/  ",
                                    style: const TextStyle(
                                        fontSize: 15,
                                        color: AppColors.primaryColor,
                                        fontWeight: FontWeight.bold)),
                                const Icon(Icons.file_copy_sharp,
                                    color: AppColors.primaryColor, size: 18),
                                const Text(" files/",
                                    style: TextStyle(
                                        fontSize: 15,
                                        color: AppColors.primaryColor,
                                        fontWeight: FontWeight.bold))
                              ]),
                          p.isLoading
                              ? const Text("")
                              : Text(
                                  "  ${p.getfilesbyfolderidList.first.items.length} files ",
                                  style: const TextStyle(
                                      fontSize: 15,
                                      color: AppColors.primaryColor,
                                      fontWeight: FontWeight.bold))
                        ])),
                p.isLoading
                    ? Center(
                        child: SizedBox(
                            height: MediaQuery.of(context).size.height * 0.7,
                            child:
                                const DotLoader(color: AppColors.primaryColor)))
                    : p.getfilesbyfolderidList.first.items.isEmpty
                        ? Padding(
                            padding: const EdgeInsets.only(top: 200),
                            child: Center(
                                child: Image.asset(AppImages.filesnotfound,
                                        width: 200,
                                        opacity:
                                            const AlwaysStoppedAnimation(0.2))
                                    .animate(
                                        onPlay: (controller) =>
                                            controller.repeat())
                                    .shader()
                                    .shimmer(
                                        color: Colors.grey.shade200,
                                        duration: 3.seconds)))
                        : ListView.separated(
                            itemCount:
                                p.getfilesbyfolderidList.first.items.length,
                            shrinkWrap: true,
                            controller: ScrollController(),
                            separatorBuilder: (context, index) =>
                                const Divider(),
                            physics: const NeverScrollableScrollPhysics(),
                            itemBuilder: (BuildContext context, int index) {
                              var data =
                                  p.getfilesbyfolderidList.first.items[index];
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
                                                          ApiLinks.imgLink +
                                                              data,
                                                      errorWidget: (context,
                                                          url, error) {
                                                        return Image.asset(
                                                            AppImages
                                                                .imgnotfound,
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
                                              insetAnimationCurve:
                                                  Curves.slowMiddle,
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
                                              Image.asset(
                                                  AppImages.filesnotfound,
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
                                  trailing: p.isLoadingForDelete &&
                                          p.isLoadingForId == data
                                      ? const SizedBox(
                                          height: 20,
                                          width: 20,
                                          child: CircularProgressIndicator
                                              .adaptive(
                                                  strokeWidth: 2,
                                                  backgroundColor: Colors.grey))
                                      : Row(
                                          mainAxisSize: MainAxisSize.min,
                                          children: [
                                              IconButton(
                                                  onPressed: () {
                                                    deleteFileSheet(context,
                                                        token:
                                                            Provider.of<AuthVm>(
                                                                    context,
                                                                    listen:
                                                                        false)
                                                                .userProfile
                                                                .token,
                                                        folderId:
                                                            widget.folderId,
                                                        fileName: data);
                                                  },
                                                  icon: const Icon(
                                                      Icons.more_vert)),

                                              // DropdownButton(
                                              //     borderRadius:
                                              //         BorderRadius.circular(10),
                                              //     elevation: 0,
                                              //     dropdownColor: AppColors
                                              //         .primaryColor
                                              //         .withOpacity(0.5),
                                              //     icon: const Icon(
                                              //         Icons.more_vert,
                                              //         color: AppColors
                                              //             .primaryColor),
                                              //     underline:
                                              //         const SizedBox.shrink(),
                                              //     onChanged: (value) async {
                                              //       await p.deleteFolderFilesF(
                                              //           context,
                                              //           token:
                                              //               Provider.of<AuthVm>(
                                              //                       context,
                                              //                       listen:
                                              //                           false)
                                              //                   .userProfile
                                              //                   .token,
                                              //           folderId:
                                              //               widget.folderId,
                                              //           fileName: data);
                                              //     },
                                              //     items: const [
                                              //       DropdownMenuItem(
                                              //           value: 2,
                                              //           child: Text(
                                              //               'Delete File '))
                                              //     ]),
                                              const SizedBox(width: 10),
                                              SizedBox(
                                                  width: 10,
                                                  child: Checkbox(
                                                      value: _selectedItems
                                                          .contains(data),
                                                      onChanged: (value) {
                                                        setState(() {
                                                          if (value!) {
                                                            _selectedItems
                                                                .add(data);
                                                          } else {
                                                            _selectedItems
                                                                .remove(data);
                                                          }
                                                        });
                                                      }))
                                            ]));
                            })
              ])));
    });
  }
}
////floatin
