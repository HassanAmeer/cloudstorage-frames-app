import '../provider/upgradingVm.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:google_fonts/google_fonts.dart';
import '../constant/colors.dart';
import '../widgets/dotloader.dart';
import 'package:flutter_animate/flutter_animate.dart';

class PlansPage extends StatefulWidget {
  bool isFromBuyFolder;
  String folderName;
  PlansPage({super.key, this.isFromBuyFolder = false, this.folderName = ""});

  @override
  _PlansPageState createState() => _PlansPageState();
}

class _PlansPageState extends State<PlansPage> {
  @override
  void initState() {
    super.initState();
    syncFirstF();
  }

  syncFirstF() async {
    var config = Provider.of<Upgrading>(context, listen: false);
    if (config.plansList.isEmpty) {
      config.getPlans(context);
    }
  }

  @override
  Widget build(BuildContext context) {
    return Consumer<Upgrading>(builder: (context, p, c) {
      return Scaffold(
          appBar: AppBar(
              leading: IconButton(
                  icon: const Icon(Icons.arrow_back_ios, color: Colors.white),
                  onPressed: () {
                    Navigator.pop(context);
                  }),
              actions: [
                p.isLoadingFoyBuy
                    ? const Padding(
                        padding: EdgeInsets.all(8),
                        child: DotLoader(color: Colors.white))
                    : const SizedBox.shrink()
              ],
              title: const Text('Plans', style: TextStyle(color: Colors.white)),
              backgroundColor: AppColors.primaryColor),
          body: p.isLoading
              ? const Center(child: DotLoader(color: AppColors.primaryColor))
              : p.plansList.isEmpty
                  ? Center(
                      child: Text("No Notifications",
                              style: GoogleFonts.agbalumo(
                                  color: Colors.grey, fontSize: 20))
                          .animate(onPlay: (controller) => controller.repeat())
                          .shimmer(
                              color: Colors.deepOrange.shade200,
                              duration: 2.seconds))
                  : Padding(
                      padding: const EdgeInsets.symmetric(horizontal: 16.0),
                      child: ListView.builder(
                          itemCount: p.plansList
                              .length, // Number of plans, adjust as needed
                          itemBuilder: (context, index) {
                            var data = p.plansList[index];
                            return Padding(
                                padding: const EdgeInsets.all(10),
                                child: PlanCard(
                                    onTap: () async {
                                      if (widget.isFromBuyFolder == true) {
                                        await p.forBuyingFolderF(context,
                                            folderName:
                                                widget.folderName.toString(),
                                            amount: data.price);
                                      }
                                    },
                                    title: data.title,
                                    subtitle: "${data.price} \$",
                                    // subtitle: "${data.price} USD",
                                    desc: data.desc
                                        .map((e) => e.toString())
                                        .toList()));
                          })));
    });
  }
}

class PlanCard extends StatelessWidget {
  final String title;
  final String subtitle;
  final List<String> desc;
  final VoidCallback onTap;

  const PlanCard({
    super.key,
    this.title = "",
    this.subtitle = "",
    this.desc = const [],
    required this.onTap,
  });

  @override
  Widget build(BuildContext context) {
    double cardHeight =
        MediaQuery.of(context).size.height * 0.35; // Adjust to fit the screen

    return Container(
        margin: const EdgeInsets.symmetric(vertical: 10),
        height: cardHeight, // Set the height of the card
        decoration: BoxDecoration(
            color: Colors.white, // Card background color
            borderRadius: BorderRadius.circular(12), // Rounded corners
            boxShadow: [
              BoxShadow(
                  color: Colors.grey.withOpacity(0.2),
                  spreadRadius: 2,
                  blurRadius: 5,
                  offset: const Offset(0, 3))
            ]),
        child: Padding(
            padding: const EdgeInsets.all(10),
            child: Column(children: [
              // Title and Subtitle Section
              Padding(
                  padding: const EdgeInsets.all(16.0),
                  child: Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        Text(title,
                            style: const TextStyle(
                                fontSize: 24,
                                fontWeight: FontWeight.bold,
                                color: AppColors.primaryColor)),
                        Container(
                            padding: const EdgeInsets.symmetric(
                                horizontal: 14, vertical: 4),
                            decoration: BoxDecoration(
                              color: AppColors.primaryColor,
                              borderRadius: BorderRadius.circular(20),
                            ),
                            child: Text(subtitle,
                                style: const TextStyle(
                                    fontSize: 16,
                                    fontWeight: FontWeight.bold,
                                    color: Colors.white)))
                      ])),

              // Bullet Point List for Description
              Padding(
                  padding: const EdgeInsets.symmetric(horizontal: 16.0),
                  child: Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: desc.map((item) {
                        return Row(children: [
                          const Text('• ',
                              style: TextStyle(
                                  fontSize: 18, color: AppColors.primaryColor)),
                          Flexible(
                              child: Text(item,
                                  style: const TextStyle(
                                      fontSize: 14, color: Colors.black54)))
                        ]);
                      }).toList())),

              const Spacer(),
              // Buy Plan Button
              Padding(
                  padding: const EdgeInsets.all(16.0),
                  child: SizedBox(
                      width: MediaQuery.of(context).size.width * 0.8,
                      child: ElevatedButton(
                          onPressed: onTap,
                          style: ElevatedButton.styleFrom(
                              backgroundColor: AppColors.primaryColor,
                              shape: RoundedRectangleBorder(
                                  borderRadius: BorderRadius.circular(8)),
                              padding:
                                  const EdgeInsets.symmetric(vertical: 12)),
                          child: const Text('Buy Plan',
                              style: TextStyle(color: Colors.white)))))
            ])));
  }
}
