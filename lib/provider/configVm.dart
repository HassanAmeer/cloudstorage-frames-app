import 'package:flutter/material.dart';
// import 'dart:convert';
// import 'dart:developer';
// import '../constant/links.dart';
// import 'package:connectivity_plus/connectivity_plus.dart';
// import '../models/plansmodel.dart';
// import '../widgets/toast.dart';
// import 'package:http/http.dart' as http;

class ConfigVm with ChangeNotifier {
  bool _isLoading = false;
  bool get isLoading => _isLoading;
  set isLoadingF(bool value) {
    _isLoading = value;
    notifyListeners();
  }

  // List<PlanModel> plansList = [];
  // ////////////////////
  // Future getPlans(context, {token = ""}) async {
  //   isLoadingF = true;

  //   try {
  //     var connectivityResult = await (Connectivity().checkConnectivity());
  //     if (connectivityResult == ConnectivityResult.none) {
  //       snackBarColorF("🛜 Network Not Available", context);
  //       return;
  //     }

  //     var response = await http
  //         .get(Uri.parse(ApiLinks.baseUrl + ApiLinks.plans), headers: {
  //       // 'Authorization': 'Bearer $token',
  //     });
  //     var dresp = jsonDecode(response.body);

  //     if (response.statusCode == 200 || response.statusCode == 201) {
  //       if (dresp['plans'].isEmpty || dresp['plans'] == null) {
  //         plansList = [];
  //       } else {
  //         plansList = [];
  //         for (int i = 0; i < dresp['plans'].length; i++) {
  //           plansList.add(PlanModel.fromJson(dresp['plans'][i]));
  //         }
  //       }
  //     } else {
  //       snackBarColorF("${dresp['message']}", context);
  //     }
  //     log("👉 ${dresp['plans']}");
  //   } catch (e, st) {
  //     snackBarColorF("$e", context);
  //     debugPrint("💥 error: $e , st:$st");
  //   } finally {
  //     isLoadingF = false;
  //     notifyListeners();
  //   }
  // }
}
