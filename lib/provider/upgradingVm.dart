import 'dart:convert';
import 'dart:developer';
import 'package:flutter_easyloading/flutter_easyloading.dart';
import 'package:storyforgen/provider/foldersVm.dart';
import 'package:connectivity_plus/connectivity_plus.dart';
import 'package:flutter/material.dart';
import 'package:flutter_stripe/flutter_stripe.dart';
import 'package:http/http.dart' as http;
import 'package:provider/provider.dart';

import '../constant/links.dart';
import '../models/plansmodel.dart';
import '../widgets/toast.dart';

class Upgrading with ChangeNotifier {
  bool _isLoading = false;
  bool get isLoading => _isLoading;
  set isLoadingF(bool value) {
    _isLoading = value;
    notifyListeners();
  }

///////////////////////////////// geting plans start

  List<PlanModel> plansList = [];
  ////////////////////
  Future getPlans(context, {token = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      var response = await http
          .get(Uri.parse(ApiLinks.baseUrl + ApiLinks.plans), headers: {
        // 'Authorization': 'Bearer $token',
      });
      var dresp = jsonDecode(response.body);

      if (response.statusCode == 200 || response.statusCode == 201) {
        if (dresp['plans'].isEmpty || dresp['plans'] == null) {
          plansList = [];
        } else {
          plansList = [];
          for (int i = 0; i < dresp['plans'].length; i++) {
            plansList.add(PlanModel.fromJson(dresp['plans'][i]));
          }
        }
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      log("👉 ${dresp['plans']}");
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

///////////////////////////////// geting plans end
  Map<String, dynamic>? paymentintent;
  creatpaymentintentf({amount = 0}) async {
    try {
      final price = int.parse(amount.toString()) * 100;
      Map<String, dynamic> body = {"amount": "$price", "currency": "USD"};
      final resp = await http.post(
          Uri.parse('https://api.stripe.com/v1/payment_intents'),
          body: body,
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            "Accept": "application/json",
            "Authorization":
                "Bearer sk_test_51NWbaPDPiaFCF9z8M9wbZRhKBswtSi7dsPSeXqC826lwseCgNri1Ai5xBMwf2T8UpxowPFmT0e4vRw4PJaCwkQB200pykV5AsE",
          });
      return jsonDecode(resp.body);
    } catch (e) {
      debugPrint('$e -------when create a paymentinetent try catch--');
    }
  }

//////////////////////// fro check stripe transaction id
  Future<String?> getTransactionId(String clientSecret) async {
    try {
      final stripe = Stripe.instance;
      final paymentIntent = await stripe.retrievePaymentIntent(clientSecret);
      return paymentIntent.id;
    } catch (e) {
      debugPrint('Error retrieving PaymentIntent: $e');
      return null;
    }
  }
  ///////////////////////

/////////////////
  Future<bool> forBuyingFramesF(context, {amount = 0}) async {
    try {
      isLoadingFoyBuyF = true;
      notifyListeners();

      final payintent = await creatpaymentintentf(amount: amount);
      const gpay = PaymentSheetGooglePay(
          //  testEnv: true
          merchantCountryCode: 'US',
          currencyCode: "USD");
      await Stripe.instance.initPaymentSheet(
          paymentSheetParameters: SetupPaymentSheetParameters(
              paymentIntentClientSecret: payintent!["client_secret"],
              style: ThemeMode.light,
              merchantDisplayName: "Adaptive Inscribed",
              googlePay: gpay));

      await Stripe.instance.presentPaymentSheet();
      final transactionId = await getTransactionId(payintent!["client_secret"]);
      debugPrint('👉  transactionId: $transactionId');
      if (transactionId!.isNotEmpty) {
        // ScaffoldMessenger.of(context)
        //     .showSnackBar(const SnackBar(content: Text('Payment Successful')));
        return true;
      } else {
        debugPrint(
            'payment cancelled ----------- $transactionId ----------------');
        return false;
      }
    } catch (e, st) {
      isLoadingFoyBuyF = false;
      notifyListeners();
      if (e is StripeException && e.error.code == FailureCode.Canceled) {
        ScaffoldMessenger.of(context)
            .showSnackBar(const SnackBar(content: Text('Payment canceled')));
      } else {
        ScaffoldMessenger.of(context)
            .showSnackBar(SnackBar(content: Text('$e')));
      }
      debugPrint('erro:$e, st:$st ---------------- create stripe try catch ');
      return false;
    } finally {
      isLoadingFoyBuyF = false;
      notifyListeners();
    }
  }

////////  2nd
  bool _isLoadingFoyBuy = false;
  bool get isLoadingFoyBuy => _isLoadingFoyBuy;
  set isLoadingFoyBuyF(bool value) {
    _isLoadingFoyBuy = value;
    notifyListeners();
  }

  Future forBuyingFolderF(context,
      {amount = 0, required String folderName}) async {
    try {
      isLoadingFoyBuyF = true;
      notifyListeners();

      final payintent = await creatpaymentintentf(amount: amount);
      const gpay = PaymentSheetGooglePay(
          //  testEnv: true
          merchantCountryCode: 'US',
          currencyCode: "USD");
      await Stripe.instance.initPaymentSheet(
          paymentSheetParameters: SetupPaymentSheetParameters(
              paymentIntentClientSecret: payintent!["client_secret"],
              style: ThemeMode.light,
              merchantDisplayName: "Story For Generations",
              googlePay: gpay));

      await Stripe.instance.presentPaymentSheet();
      final transactionId = await getTransactionId(payintent!["client_secret"]);
      if (transactionId!.isNotEmpty) {
        ScaffoldMessenger.of(context)
            .showSnackBar(const SnackBar(content: Text('Payment Successful')));

        await Provider.of<FoldersVm>(context, listen: false)
            .createFolderF(context, folderName: folderName)
            .then((v) {
          makeTransactionHistoyF(
            context,
            foldername: "",
            folderstorage: "",
            payfor: 0,
            price: "100",
            trid: "name",
            token: "",
          );
          isLoadingFoyBuyF = false;
          notifyListeners();
          Navigator.of(context).pop();
          Navigator.of(context).pop();
        });

        // debugPrint(
        //     'payment successfull ----------- $transactionId ---------------');
      } else {
        debugPrint(
            'payment cancelled ----------- $transactionId ----------------');
      }
    } catch (e, st) {
      isLoadingFoyBuyF = false;
      notifyListeners();
      ScaffoldMessenger.of(context).showSnackBar(SnackBar(content: Text('$e')));
      debugPrint('erro:$e, st:$st ---------------- create stripe try catch ');
    } finally {
      isLoadingFoyBuyF = false;
      notifyListeners();
    }
  }

  ////////// mak a transaction history
  makeTransactionHistoyF(
    context, {
    String foldername = "",
    String folderstorage = "",
    int payfor = 0 /*0 for folder 1 for frames */,
    String price = "",
    List frameids = const [],
    String trid = "",
    String token = "",
  }) async {
    var resp = await http.post(
        Uri.parse(ApiLinks.baseUrl + ApiLinks.makeTransactionHistory),
        body: {
          "foldername": foldername,
          "folderstorage": folderstorage,
          "payfor": payfor,
          "price": price,
          "frameids": frameids,
          "trid": trid,
        },
        headers: {
          'Authorization': 'Bearer $token'
        });
    var respd = jsonDecode(resp.body);
    if (resp.statusCode == 200 || resp.statusCode == 201) {
      EasyLoading.showSuccess("Transaction Created");
    } else {
      EasyLoading.showSuccess("${respd['message']}");
    }
  }
}
