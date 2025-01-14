import '../constant/colors.dart';
import '../constant/images.dart';
import '../pages/plans.dart';
import '../provider/foldersVm.dart';
import 'package:flutter/material.dart';
import 'package:flutter_animate/flutter_animate.dart';
import 'package:provider/provider.dart';

import '../widgets/dotloader.dart';
import '../widgets/sheets.dart';
import 'folderfiles.dart';

class FoldersPage extends StatefulWidget {
  const FoldersPage({super.key});

  @override
  State<FoldersPage> createState() => _FoldersPageState();
}

class _FoldersPageState extends State<FoldersPage> {
  get decoration => null;

  List imagesList = [
    AppImages.img1,
    AppImages.img2,
    AppImages.img3,
    AppImages.img4,
    AppImages.img5,
    AppImages.video,
  ];

  bool isGridView = false;

  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    var f = Provider.of<FoldersVm>(context, listen: false);
    if (f.foldersList.isEmpty) {
      f.getAllFolders(context);
    }
  }

  var folderNameContr = TextEditingController();
  @override
  Widget build(BuildContext context) {
    return Consumer<FoldersVm>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
              backgroundColor: AppColors.primaryColor.withOpacity(0.1),
              // leading: IconButton(
              //     onPressed: () {
              //       Navigator.pop(context);
              //     },
              //     icon: const Icon(
              //       Icons.arrow_back_ios,
              //       color: AppColors.primaryColor,
              //     )),
              title: Text("${p.foldersList.length} Folders",
                  style: const TextStyle(
                      color: AppColors.primaryColor,
                      fontSize: 20,
                      fontWeight: FontWeight.bold)),
              actions: [
                ElevatedButton.icon(
                    onPressed: () {
                      showAdaptiveDialog(
                          context: context,
                          builder: (context) {
                            return Galert(onTap: (v) {
                              // snackBarColorF("$v", context);
                              Navigator.push(
                                  context,
                                  MaterialPageRoute(
                                      builder: (context) => PlansPage(
                                          folderName: v,
                                          isFromBuyFolder: true)));
                            });
                          });
                    },
                    label: const Text("Create Folder",
                        style: TextStyle(color: Colors.white)),
                    icon: const Icon(Icons.add, color: Colors.white),
                    style: ButtonStyle(
                        backgroundColor:
                            WidgetStateProperty.all(AppColors.primaryColor))),
                const SizedBox(width: 10)
              ]),
          body:

              /* Its Take A Child   */
              DefaultTabController(
                  length: 2,
                  initialIndex: 1,
                  animationDuration: const Duration(milliseconds: 1000),
                  child: Column(children: [
                    Container(
                      decoration: BoxDecoration(
                        color: AppColors.primaryColor.withOpacity(0.1),
                      ),
                      child: TabBar(
                          dividerHeight: 1,
                          dividerColor: AppColors.primaryColor.withOpacity(0.3),
                          indicatorWeight: 1,
                          labelColor: AppColors.primaryColor,
                          unselectedLabelColor: Colors.grey,
                          indicatorColor: AppColors.primaryColor,
                          tabs: const [
                            Tab(
                              icon: Icon(Icons.folder_copy),
                              text: '     All Folders      ',
                              iconMargin: EdgeInsets.all(1),
                            ),
                            Tab(
                              icon: Icon(Icons.folder_shared),
                              text: '       Shared Folders      ',
                              iconMargin: EdgeInsets.all(1),
                            ),
                          ]),
                    ),
                    Expanded(
                        child: TabBarView(children: [
                      Column(children: [
                        Padding(
                            padding: const EdgeInsets.all(20),
                            child: Row(
                                mainAxisAlignment:
                                    MainAxisAlignment.spaceBetween,
                                children: [
                                  const Row(
                                    mainAxisAlignment: MainAxisAlignment.start,
                                    children: [
                                      Icon(Icons.folder_copy,
                                          color: AppColors.primaryColor),
                                      Text("  Folders/",
                                          style: TextStyle(
                                              fontSize: 15,
                                              color: AppColors.primaryColor,
                                              fontWeight: FontWeight.bold)),
                                    ],
                                  ),
                                  IconButton(
                                      onPressed: () {
                                        isGridView = !isGridView;
                                        setState(() {});
                                      },
                                      icon: Icon(
                                        isGridView ? Icons.window : Icons.list,
                                        color: AppColors.primaryColor,
                                      ))
                                ])),
                        p.foldersList.isEmpty
                            ? Padding(
                                padding: const EdgeInsets.only(top: 150),
                                child: Center(
                                    child: Image.asset(AppImages.foldernotfound,
                                            opacity:
                                                const AlwaysStoppedAnimation(
                                                    0.2))
                                        .animate(
                                            onPlay: (controller) =>
                                                controller.repeat())
                                        .shader()
                                        .shimmer(
                                            color: Colors.grey.shade200,
                                            duration: 3.seconds)))
                            : p.isLoading
                                ? const Center(
                                    child: Padding(
                                        padding: EdgeInsets.only(top: 250),
                                        child: DotLoader(
                                            color: AppColors.primaryColor)))
                                : isGridView
                                    ? GridView.builder(
                                        gridDelegate:
                                            const SliverGridDelegateWithFixedCrossAxisCount(
                                                crossAxisCount: 3),
                                        itemCount: p.foldersList.length,
                                        shrinkWrap: true,
                                        controller: ScrollController(),
                                        physics: const BouncingScrollPhysics(),
                                        itemBuilder:
                                            (BuildContext context, int index) {
                                          var data = p.foldersList[index];
                                          return Card(
                                              child: InkWell(
                                                  onTap: () {
                                                    Navigator.push(context,
                                                        MaterialPageRoute(
                                                            builder: (context) {
                                                      return FolderFiles(
                                                        folderName:
                                                            data.folderName,
                                                        folderId: data.id,
                                                      );
                                                    }));
                                                  },
                                                  child: Column(
                                                      crossAxisAlignment:
                                                          CrossAxisAlignment
                                                              .center,
                                                      mainAxisAlignment:
                                                          MainAxisAlignment
                                                              .spaceEvenly,
                                                      children: [
                                                        const Icon(Icons.folder,
                                                            color: AppColors
                                                                .primaryColor,
                                                            size: 80),
                                                        Stack(children: [
                                                          SizedBox(
                                                              width: double
                                                                  .infinity,
                                                              child: Center(
                                                                  child:
                                                                      Padding(
                                                                padding: const EdgeInsets
                                                                    .symmetric(
                                                                    horizontal:
                                                                        7),
                                                                child: Text(data
                                                                    .folderName),
                                                              ))),
                                                          Positioned(
                                                              right: p.isLoadingForDelete &&
                                                                      p.isLoadingForId ==
                                                                          data
                                                                              .id
                                                                  ? 5
                                                                  : -2,
                                                              top: p.isLoadingForDelete &&
                                                                      p.isLoadingForId ==
                                                                          data
                                                                              .id
                                                                  ? 5
                                                                  : -13,
                                                              child: p.isLoadingForDelete &&
                                                                      p.isLoadingForId ==
                                                                          data
                                                                              .id
                                                                  ? const SizedBox(
                                                                      width: 12,
                                                                      height:
                                                                          12,
                                                                      child: CircularProgressIndicator(
                                                                          strokeWidth:
                                                                              2,
                                                                          color: AppColors
                                                                              .primaryColor))
                                                                  : IconButton(
                                                                      onPressed:
                                                                          () {
                                                                        optionsSheet(
                                                                            context,
                                                                            folderData:
                                                                                data);
                                                                      },
                                                                      icon:
                                                                          const Icon(
                                                                        Icons
                                                                            .more_vert,
                                                                        color: AppColors
                                                                            .primaryColor,
                                                                      )))
                                                        ])
                                                      ])));
                                        })
                                    : Expanded(
                                        child: ListView.separated(
                                            itemCount: p.foldersList.length,
                                            shrinkWrap: true,
                                            controller: ScrollController(),
                                            separatorBuilder:
                                                (context, index) =>
                                                    const Divider(),
                                            physics:
                                                const BouncingScrollPhysics(),
                                            itemBuilder: (BuildContext context,
                                                int index) {
                                              var data = p.foldersList[index];
                                              return ListTile(
                                                  onTap: () {
                                                    Navigator.push(context,
                                                        MaterialPageRoute(
                                                            builder: (context) {
                                                      return FolderFiles(
                                                          folderId: data.id,
                                                          folderName:
                                                              data.folderName);
                                                    }));
                                                  },
                                                  leading: const Icon(
                                                      Icons.folder,
                                                      color: AppColors
                                                          .primaryColor,
                                                      size: 40),
                                                  title: Text(data.folderName),
                                                  subtitle: Text(
                                                      "${data.folderUsedSpace} MB",
                                                      style: const TextStyle(
                                                          fontSize: 12,
                                                          color: Colors.grey)),
                                                  trailing: p.isLoadingForDelete &&
                                                          p.isLoadingForId ==
                                                              data.id
                                                      ? const SizedBox(
                                                          width: 20,
                                                          height: 20,
                                                          child: CircularProgressIndicator(
                                                              strokeWidth: 2,
                                                              color: AppColors
                                                                  .primaryColor))
                                                      : IconButton(
                                                          onPressed: () {
                                                            optionsSheet(
                                                                context,
                                                                folderData:
                                                                    data);
                                                          },
                                                          icon: const Icon(
                                                            Icons.more_vert,
                                                            color: AppColors
                                                                .primaryColor,
                                                          )));
                                            }),
                                      )
                      ]),
                      Center(
                          child: Text('Not Shared Yet',
                              style: TextStyle(
                                  fontSize: 25, color: Colors.grey.shade400)))
                    ])),
                  ])));
    });
  }
}
////floatin
