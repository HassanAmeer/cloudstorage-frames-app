import 'dart:convert';
import 'dart:developer';
import 'dart:io';
import 'package:firebase_auth/firebase_auth.dart';
import 'package:flutter_easyloading/flutter_easyloading.dart';
import 'package:google_sign_in/google_sign_in.dart';
import 'package:storyforgen/constant/links.dart';
import 'package:storyforgen/models/notifyModel.dart';
import 'package:storyforgen/models/ordersModel.dart';
import 'package:connectivity_plus/connectivity_plus.dart';
import 'package:flutter/material.dart';
import 'package:shared_preferences/shared_preferences.dart';
import '../bottomnavbar.dart';
import '../models/authModel.dart';
import '../pages/auth/login.dart';
import '../storage/userstorage.dart';
import '../widgets/toast.dart';
import 'package:http/http.dart' as http;

class AuthVm with ChangeNotifier {
  // final FirebaseAuth _auth = FirebaseAuth.instance;

  bool _isLoading = false;
  bool get isLoading => _isLoading;
  set isLoadingF(bool value) {
    _isLoading = value;
    notifyListeners();
  }

  AuthModel? _user;
  AuthModel get userProfile => _user!;
  Future<AuthModel?> getUserData() async {
    final prefs = await SharedPreferences.getInstance();
    final token = prefs.getString(UserStorage.tokenKey).toString();
    final uid = prefs.getString(UserStorage.uidKey).toString();
    final active = prefs.getString(UserStorage.activeKey).toString();
    final img = prefs.getString(UserStorage.imgKey).toString();
    final name = prefs.getString(UserStorage.nameKey).toString();
    final email = prefs.getString(UserStorage.emailKey).toString();
    final phone = prefs.getString(UserStorage.phoneKey).toString();
    final address = prefs.getString(UserStorage.addressKey).toString();
    final password = prefs.getString(UserStorage.passwordKey).toString();
    _user = AuthModel.fromJson({
      "token": token,
      "id": uid,
      "active": active,
      // "active": active == "true" ? true : false,
      "img": img,
      "name": name,
      "email": email,
      "phone": phone,
      "address": address,
      "password": password,
    });
    notifyListeners();
    return _user;
  }

  bool _isLoadingForGoogle = false;
  bool get isLoadingForGoogle => _isLoadingForGoogle;
  set isLoadingForGoogleF(bool value) {
    _isLoadingForGoogle = value;
    notifyListeners();
  }

  Future loginByGoogleF(context) async {
    isLoadingForGoogleF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      // for user to select their Google account and grant permission.
      final GoogleSignInAccount? googleUser = await GoogleSignIn().signIn();
      // check user select an email or not
      if (googleUser != null) {
        final GoogleSignInAuthentication
            // when user sign in then get authentication for token, id
            googleAuth = await googleUser.authentication;
        //with token and ID to create a credential.
        final credential = GoogleAuthProvider.credential(
            accessToken: googleAuth.accessToken, idToken: googleAuth.idToken);
        // then sign in to Firebase Authentication with this credential and get user signed data
        final UserCredential userCredential =
            await FirebaseAuth.instance.signInWithCredential(credential);

        /////// signup
        // http.Response response =
        await http.post(Uri.parse(ApiLinks.baseUrl + ApiLinks.reg), body: {
          "name": userCredential.user!.displayName.toString(),
          "email": userCredential.user!.email.toString(),
          "password": '12345678',
        });
        // var dresp = jsonDecode(response.body);
        // if (response.statusCode == 200 || response.statusCode == 201) {
        await loginF(context,
            showLoading: false, email: userCredential.user!.email.toString());
        // }
        /////// signup and signin end
        ///
        EasyLoading.showSuccess("Sign In");
        // debugPrint("✔ Signed in as ${userCredential.user!.displayName}");
      } else {
        EasyLoading.showError("SIgn In Cancelled");
        // debugPrint("🟨 Sign-in cancelled");
      }
    } catch (error, stackTrace) {
      debugPrint("💥try catch when Sign In By Google: Error: $error");
      debugPrint("💥try catch stackTrace: $stackTrace");
      isLoadingForGoogleF = false;
    } finally {
      isLoadingForGoogleF = false;
    }
  }

  Future loginF(context,
      {bool showLoading = true,
      String email = "",
      String password = "12345678"}) async {
    if (showLoading) {
      isLoadingF = true;
    }

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      if (email.isEmpty) {
        snackBarColorF("Email is required", context);
        return;
      }
      if (password.isEmpty) {
        snackBarColorF("Password is required", context);
        return;
      }
      notifyListeners();

      http.Response response =
          await http.post(Uri.parse(ApiLinks.baseUrl + ApiLinks.login), body: {
        "email": email,
        "password": password
      }, headers: <String, String>{
        // 'Content-Type': 'application/json',
      });
      var dresp = jsonDecode(response.body);
      if (response.statusCode == 200 || response.statusCode == 201) {
        _user = AuthModel.fromJson(dresp['user']);
        _user!.token = dresp['token'];
        await UserStorage.setUserF(
            token: dresp['token'],
            uid: _user!.id.toString(),
            active: _user!.isActive.toString(),
            img: _user!.img.toString(),
            name: _user!.name.toString(),
            email: _user!.email.toString(),
            phone: _user!.phone.toString(),
            address: _user!.address.toString(),
            password: _user!.password.toString());
        notifyListeners();
        EasyLoading.showSuccess("Login Successfully");

        Navigator.push(context,
            MaterialPageRoute(builder: (context) => const BottomNavBar()));
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      //
      log("👉 ${dresp['message']}");
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

  Future signupF(context,
      {String email = "",
      String password = "",
      String name = "",
      String phone = "",
      String address = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      if (email.isEmpty) {
        snackBarColorF("Email is required", context);
        return;
      }
      if (phone.isEmpty) {
        snackBarColorF("Phone Number is required", context);
        return;
      }
      if (password.isEmpty) {
        snackBarColorF("Password is required", context);
        return;
      }
      notifyListeners();

      http.Response response =
          await http.post(Uri.parse(ApiLinks.baseUrl + ApiLinks.reg), body: {
        "email": email,
        "password": password,
        "name": name,
        "phone": phone,
        "address": address
      }, headers: <String, String>{
        // 'Content-Type': 'application/json',
      });
      var dresp = jsonDecode(response.body);
      if (response.statusCode == 200 || response.statusCode == 201) {
        EasyLoading.showSuccess("Signup Successfully");
        Navigator.push(context,
            MaterialPageRoute(builder: (context) => const LoginPage()));
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

  ////////////////////
  Future updateProfileF(context,
      {String token = "",
      String imgPath = "",
      String email = "",
      String password = "",
      String name = "",
      String phone = "",
      String address = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      if (email.isEmpty) {
        snackBarColorF("Email is required", context);
        return;
      }
      if (phone.isEmpty) {
        snackBarColorF("Phone Number is required", context);
        return;
      }
      if (address.isEmpty) {
        snackBarColorF("Address is required", context);
        return;
      }
      notifyListeners();

      var request = http.MultipartRequest(
          'POST', Uri.parse(ApiLinks.baseUrl + ApiLinks.updateProfile));
      request.headers['Authorization'] = 'Bearer $token';
      // request.headers['Content-Type'] = 'application/json';
      request.fields['email'] = email;
      request.fields['name'] = name;
      request.fields['phone'] = phone;
      request.fields['address'] = address;
      if (imgPath.isNotEmpty) {
        var pic = await http.MultipartFile.fromPath('img', imgPath);
        request.files.add(pic);
      }
      var response = await request.send();
      var dresp = jsonDecode(await response.stream.bytesToString());

      if (response.statusCode == 200 || response.statusCode == 201) {
        // snackBarColorF("Profile Updated Successfully", context);
        snackBarColorF("${dresp['message']}", context);
        _user = AuthModel.fromJson(dresp['user']);
        await UserStorage.setUserF(
          img: _user!.img.toString(),
          name: _user!.name.toString(),
          email: _user!.email.toString(),
          phone: _user!.phone.toString(),
          address: _user!.address.toString(),
        );
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      log("👉 update profile resonse: $dresp");
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

  ////////////////////
  logoutF(context, {token = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      var response = await http
          .get(Uri.parse(ApiLinks.baseUrl + ApiLinks.logout), headers: {
        'Authorization': 'Bearer $token',
      });
      var dresp = jsonDecode(response.body);

      if (response.statusCode == 200 || response.statusCode == 201) {
        Navigator.push(context,
            MaterialPageRoute(builder: (context) => const LoginPage()));
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }
  //////////////

  List<NotifyModel> notifyList = [];
  ////////////////////
  Future getNotify(context) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      var response = await http
          .get(Uri.parse(ApiLinks.baseUrl + ApiLinks.notify), headers: {
        'Authorization': 'Bearer ${userProfile.token}',
      });
      var dresp = jsonDecode(response.body);

      if (response.statusCode == 200 || response.statusCode == 201) {
        if (dresp['notify'].isEmpty || dresp['notify'] == null) {
          notifyList = [];
        } else {
          notifyList = [];
          for (int i = 0; i < dresp['notify'].length; i++) {
            notifyList.add(NotifyModel.fromJson(dresp['notify'][i]));
          }
        }
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      log("👉 ${dresp['notify']}");
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

  ////////////////////
  List<OrdersModel> ordersList = [];
  //
  Future getOrdersF(context) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      var response = await http.get(
          Uri.parse(ApiLinks.baseUrl + ApiLinks.orders),
          headers: {'Authorization': 'Bearer ${userProfile.token}'});
      var dresp = jsonDecode(response.body);

      if (response.statusCode == 200 || response.statusCode == 201) {
        if (dresp['orders'].isEmpty || dresp['orders'] == null) {
          ordersList = [];
        } else {
          ordersList = [];
          for (int i = 0; i < dresp['orders'].length; i++) {
            ordersList.add(OrdersModel.fromJson(dresp['orders'][i]));
          }
        }
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      log("👉 ${dresp['orders']}");
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

/////////////// contactUsF start
  Future contactUsF(context,
      {String email = "", String name = "", String desc = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      if (name.isEmpty) {
        snackBarColorF("Name is required", context);
        return;
      }
      if (email.isEmpty) {
        snackBarColorF("Email is required", context);
        return;
      }
      if (desc.isEmpty) {
        snackBarColorF("Decription is required", context);
        return;
      }
      notifyListeners();

      http.Response response =
          await http.post(Uri.parse(ApiLinks.baseUrl + ApiLinks.help), body: {
        "name": name,
        "email": email,
        "msg": desc,
      }, headers: <String, String>{
        // 'Content-Type': 'application/json',
      });
      var dresp = jsonDecode(response.body);
      if (response.statusCode == 200 || response.statusCode == 201) {
        snackBarColorF("Report Sent Successfully", context);
        Navigator.pop(context);
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

  Future<bool> sendOtpF(context, {String email = "", String code = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return false;
      }

      if (code.isEmpty) {
        snackBarColorF("Reopen Then Page", context);
        return false;
      }
      if (email.isEmpty) {
        snackBarColorF("Email is required", context);
        return false;
      }
      notifyListeners();

      http.Response response = await http
          .post(Uri.parse(ApiLinks.baseUrl + ApiLinks.sendVerifyCode), body: {
        "email": email,
        "code": code,
      }, headers: <String, String>{
        // 'Content-Type': 'application/json',
      });
      var dresp = jsonDecode(response.body);
      if (response.statusCode == 200 || response.statusCode == 201) {
        EasyLoading.showSuccess("OTP Sent");
        return true;
      } else {
        EasyLoading.showError("${dresp['message']}");
      }
      return false;
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
      return false;
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

  Future<bool> updatePsswordF(context,
      {String email = "", String password = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return false;
      }

      if (email.isEmpty) {
        snackBarColorF("Email is required", context);
        return false;
      }
      if (password.isEmpty) {
        snackBarColorF("Password Then Page", context);
        return false;
      }
      notifyListeners();

      http.Response response = await http
          .post(Uri.parse(ApiLinks.baseUrl + ApiLinks.updatePassword), body: {
        "email": email,
        "password": password,
      }, headers: <String, String>{
        // 'Content-Type': 'application/json',
      });
      var dresp = jsonDecode(response.body);
      debugPrint("👉 $dresp");
      if (response.statusCode == 200 || response.statusCode == 201) {
        // EasyLoading.showSuccess("Password Updated");
        EasyLoading.showSuccess("Password Updated");
        return true;
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      return false;
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
      return false;
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }
  ////////////////////

  Future createOrderF(context,
      {List<String> images = const [],
      /* images List: set path only from files/..... */
      List<File> slides = const [],
      List frameIds = const [],
      String desc = ""}) async {
    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      if (images.isEmpty) {
        snackBarColorF("Images is required", context);
        return;
      }

      isLoadingF = true;
      notifyListeners();

      try {
        var request = http.MultipartRequest(
            'POST', Uri.parse(ApiLinks.baseUrl + ApiLinks.createOrder))
          ..headers['Authorization'] = 'Bearer ${userProfile.token}'
          ..fields['desc'] = desc;
        for (var i = 0; i < images.length; i++) {
          request.fields['images[$i]'] = images[i].toString();
        }
        for (var i = 0; i < frameIds.length; i++) {
          request.fields['frames[$i]'] = frameIds[i].toString();
        }

        for (var i = 0; i < slides.length; i++) {
          if (await File(slides[i].path).exists()) {
            request.files.add(await http.MultipartFile.fromPath(
                'slides[$i]', slides[i].path));
          }
        }

        var response = await request.send();
        var responseBody = await response.stream.bytesToString();

        log(" 👉 responseBody: $responseBody");
        if (response.statusCode == 200 || response.statusCode == 201) {
          EasyLoading.showSuccess("Order Created");
          Navigator.pop(context);
        } else {
          debugPrint("Response body: $responseBody");
          EasyLoading.showError("${jsonDecode(responseBody)['message']}");
        }
      } on SocketException catch (e, st) {
        EasyLoading.showError("$e");
        debugPrint("💥 error: $e , st:$st");
      }
    } catch (e, st) {
      isLoadingF = false;
      notifyListeners();
      debugPrint(" 💥 error: $e , st:$st");
      snackBarColorF("$e", context);
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }
}
