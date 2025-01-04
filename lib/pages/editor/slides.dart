import 'package:cached_network_image/cached_network_image.dart';
import 'package:cloudstorage/constant/links.dart';
import 'package:cloudstorage/widgets/toast.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:wheel_slider/wheel_slider.dart';
import '../../constant/colors.dart';
import '../../constant/images.dart';
import '../../provider/foldersVm.dart';
import 'frames.dart';

class SlidesPage extends StatefulWidget {
  var data;
  final List imgsList;
  SlidesPage({super.key, this.data, this.imgsList = const []});

  @override
  State<SlidesPage> createState() => _SlidesPageState();
}

class _SlidesPageState extends State<SlidesPage> {
  List imagesList = [
    AppImages.img1,
    AppImages.img2,
    AppImages.img3,
    AppImages.img4,
    AppImages.img5,
    AppImages.video,
  ];

  String selectedImg = "";

  //////////////////

  final int _currentValue = 3;

  final int _cInitValue = 1;
  int _cCurrentValue = 1;

  final List<Map<String, String>> _countryList = [
    {'flag': 'assets/argentina.png', 'name': 'Argentina'},
    {'flag': 'assets/australia.png', 'name': 'Australia'},
    {'flag': 'assets/brazil.png', 'name': 'Brazil'},
    {'flag': 'assets/canada.png', 'name': 'Canada'},
    {'flag': 'assets/cuba.png', 'name': 'Cuba'},
    {'flag': 'assets/hungary.png', 'name': 'Hungary'},
    {'flag': 'assets/iceland.png', 'name': 'Iceland'},
    {'flag': 'assets/india.png', 'name': 'India'},
    {'flag': 'assets/monaco.png', 'name': 'Monaco'},
    {'flag': 'assets/south-africa.png', 'name': 'South Africa'},
    {'flag': 'assets/ukraine.png', 'name': 'Ukraine'},
    {'flag': 'assets/usa.png', 'name': 'USA'},
  ];

  final FixedExtentScrollController _scrollController =
      FixedExtentScrollController();

  @override
  void initState() {
    WidgetsBinding.instance.addPostFrameCallback((_) async {
      _scrollController.animateToItem(_currentValue,
          duration: const Duration(milliseconds: 300), curve: Curves.easeInOut);
    });
    selectedImg = widget.imgsList.first;
    setState(() {});
    super.initState();
  }

  @override
  void dispose() {
    _scrollController.dispose();
    super.dispose();
  }

  //////////////////
  @override
  Widget build(BuildContext context) {
    return Consumer<FoldersVm>(builder: (context, p, c) {
      return Scaffold(
        appBar: AppBar(
            leading: IconButton(
                onPressed: () {
                  Navigator.pop(context);
                },
                icon: const Icon(Icons.arrow_back_ios_new,
                    color: AppColors.primaryColor)),
            backgroundColor: AppColors.primaryColor.withOpacity(0.1),
            title: const Text('Slide Images',
                style: TextStyle(color: AppColors.primaryColor))),
        body: Column(children: [
          const SizedBox(height: 10),
          // Row(mainAxisAlignment: MainAxisAlignment.end, children: [
          //   InkWell(
          //       onTap: () {
          //         Navigator.push(
          //             context,
          //             MaterialPageRoute(
          //                 builder: (context) => const FramesPages(imgId: "")));
          //       },
          //       child: Container(
          //           height: 50,
          //           width: 60,
          //           decoration: BoxDecoration(
          //               borderRadius: const BorderRadius.only(
          //                   topLeft: Radius.circular(20),
          //                   bottomLeft: Radius.circular(20)),
          //               gradient: LinearGradient(colors: [
          //                 AppColors.primaryColor.shade700,
          //                 AppColors.primaryColor.shade100
          //               ], begin: Alignment.topLeft, end: Alignment.bottomRight)),
          //           child: const Icon(Icons.filter_frames_outlined,
          //               color: Colors.white)))
          // ]),
          Padding(
              padding: const EdgeInsets.all(10),
              child: Container(
                  decoration: BoxDecoration(
                      color: Colors.white,
                      boxShadow: const [
                        BoxShadow(
                            color: Colors.grey,
                            blurRadius: 15,
                            offset: Offset(1, 1))
                      ],
                      borderRadius: BorderRadius.circular(20)),
                  child: Stack(children: [
                    Container(
                        width: double.infinity,
                        decoration: BoxDecoration(color: Colors.grey.shade50),
                        child: Padding(
                            padding: const EdgeInsets.all(5),
                            child: SizedBox(
                                height: 400,
                                width: double.infinity,
                                child: CachedNetworkImage(
                                  imageUrl: ApiLinks.imgLink + selectedImg,
                                  errorWidget: (context, url, error) =>
                                      Image.asset(AppImages.imgnotfound,
                                          fit: BoxFit.cover),
                                  progressIndicatorBuilder:
                                      (context, url, progress) => const Center(
                                          child: CircularProgressIndicator(
                                              color: AppColors.primaryColor)),
                                  fit: BoxFit.cover,
                                )))),
                    Positioned(
                      bottom: 0,
                      right: 0,
                      child: _buildFrameWidget(context, selectedImg),
                    ),
                  ]))),

          OutlinedButton.icon(
              onPressed: context
                          .watch<FoldersVm>()
                          .selectedFramesLinkList
                          .firstWhere(
                              (e) =>
                                  e['imgId'].toString() == selectedImg &&
                                  e['saved'] == true,
                              orElse: () => {})['saved'] ==
                      true
                  ? null
                  : () {
                      if (Provider.of<FoldersVm>(context, listen: false)
                          .selectedFramesLinkList
                          .firstWhere(
                              (e) => e['imgId'].toString() == selectedImg,
                              orElse: () => {})
                          .isNotEmpty) {
                        context.read<FoldersVm>().saveSelectedFramesLinkListF(
                            imgId: selectedImg, saved: true);
                      } else {
                        snackBarColorF("Please select frame", context);
                      }
                    },
              icon: const Icon(Icons.save),
              label: const Text("Save")),
          const SizedBox(height: 20),
          SizedBox(
              height: 120,
              child: WheelSlider.customWidget(
                  totalCount: widget.imgsList.length,
                  initValue: _cInitValue,
                  isInfinite: false,
                  scrollPhysics: const BouncingScrollPhysics(),
                  onValueChanged: (val) {
                    setState(() {
                      _cCurrentValue = val;
                      selectedImg = widget.imgsList[val];
                    });
                  },
                  hapticFeedbackType: HapticFeedbackType.vibrate,
                  showPointer: false,
                  itemSize: 120,
                  children: List.generate(widget.imgsList.length, (index) {
                    var data = widget.imgsList[index];
                    return Transform.scale(
                        scale: _cCurrentValue == index ? 1 : 0.85,
                        child: InkWell(
                            onTap: () {
                              selectedImg = widget.imgsList[index];
                              _cCurrentValue = index;
                              setState(() {});
                            },
                            child: Stack(children: [
                              Container(
                                  height: 120,
                                  width: 120,
                                  decoration: BoxDecoration(
                                      borderRadius: BorderRadius.circular(5),
                                      border: Border.all(
                                          color: AppColors.primaryColor)),
                                  child: CachedNetworkImage(
                                      errorWidget: (context, url, error) =>
                                          Image.asset(AppImages.img1),
                                      progressIndicatorBuilder: (context, url,
                                              progress) =>
                                          const Center(
                                              child: CircularProgressIndicator(
                                                  color:
                                                      AppColors.primaryColor)),
                                      imageUrl: ApiLinks.imgLink + data,
                                      colorBlendMode: BlendMode.color,
                                      color: _cCurrentValue == index
                                          ? Colors.transparent
                                          : Colors.white,
                                      fit: BoxFit.cover)),
                              Positioned(
                                  right: 0,
                                  top: 0,
                                  child: IconButton(
                                      onPressed: () {
                                        widget.imgsList.remove(data);
                                        setState(() {});
                                      },
                                      icon: const Icon(Icons.cancel,
                                          color: Colors.red)))
                            ])));
                  }))),
          const SizedBox(height: 30),
          // SizedBox(
          //     width: MediaQuery.of(context).size.width * 0.95,
          //     child: ElevatedButton.icon(
          //         style: ElevatedButton.styleFrom(
          //             backgroundColor: AppColors.primaryColor),
          //         onPressed: () {},
          //         label:
          //             const Text("Play", style: TextStyle(color: Colors.white)),
          //         icon: const Icon(Icons.play_arrow, color: Colors.white))),
          const SizedBox(height: 10),
        ]),
        bottomNavigationBar: Padding(
          padding: const EdgeInsets.only(bottom: 14, left: 20, right: 20),
          child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.95,
              child: ElevatedButton.icon(
                  style: ElevatedButton.styleFrom(
                      shape: BeveledRectangleBorder(
                          side: const BorderSide(
                              color: AppColors.primaryColor, width: 1),
                          borderRadius: BorderRadius.circular(10)),
                      backgroundColor: Colors.grey.shade100),
                  onPressed: () {},
                  label: const Text("Order Now",
                      style: TextStyle(color: AppColors.primaryColor)),
                  icon: const Icon(Icons.shopping_cart_checkout,
                      color: AppColors.primaryColor))),
        ),
      );
    });
  }
}

Widget _buildFrameWidget(BuildContext context, String selectedImg) {
  final selectedFrame = context
      .watch<FoldersVm>()
      .selectedFramesLinkList
      .firstWhere((e) => e['imgId'].toString() == selectedImg,
          orElse: () => {});

  if (selectedFrame.isNotEmpty) {
    return _buildSelectedFrame(context, selectedFrame);
  } else {
    return _buildAddFrameButton(context, selectedImg);
  }
}

Widget _buildSelectedFrame(BuildContext context, Map<String, dynamic> frame) {
  final imgLink = frame['imgLink'].toString();

  return Stack(
    children: [
      Container(
        width: 140,
        height: 140,
        decoration: BoxDecoration(
          color: Colors.white,
          border: Border(
            top: BorderSide(width: 4, color: Colors.blueGrey.shade100),
            left: BorderSide(width: 4, color: Colors.blueGrey.shade100),
          ),
          borderRadius: BorderRadius.circular(5),
        ),
        child: Padding(
          padding: const EdgeInsets.all(8),
          child: CachedNetworkImage(
            imageUrl: imgLink,
            errorWidget: (context, url, error) => Image.asset(
              AppImages.imgnotfound,
              fit: BoxFit.cover,
            ),
            progressIndicatorBuilder: (context, url, progress) => const Center(
              child: CircularProgressIndicator(color: AppColors.primaryColor),
            ),
            fit: BoxFit.contain,
          ),
        ),
      ),
      Positioned(
        right: 0,
        child: IconButton(
          onPressed: () {
            context
                .read<FoldersVm>()
                .removeSelectedFramesLinkListF(imgLink: imgLink);
          },
          icon: const Icon(Icons.cancel),
        ),
      ),
    ],
  );
}

Widget _buildAddFrameButton(BuildContext context, String selectedImg) {
  return InkWell(
    onTap: () {
      Navigator.push(
        context,
        MaterialPageRoute(
          builder: (context) => FramesPages(imgId: selectedImg),
        ),
      );
    },
    child: Container(
      width: 120,
      height: 120,
      decoration: BoxDecoration(
        color: Colors.white,
        border: Border(
          top: BorderSide(width: 4, color: Colors.blueGrey.shade100),
          left: BorderSide(width: 4, color: Colors.blueGrey.shade100),
        ),
        borderRadius: BorderRadius.circular(5),
      ),
      child: const Column(
        mainAxisAlignment: MainAxisAlignment.center,
        crossAxisAlignment: CrossAxisAlignment.center,
        children: [
          Icon(Icons.add, color: AppColors.primaryColor),
          Text("Frame"),
        ],
      ),
    ),
  );
}