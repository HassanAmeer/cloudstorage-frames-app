import 'package:shared_preferences/shared_preferences.dart';
import '../models/authModel.dart';

class UserStorage {
  static const String tokenKey = 'token';
  static const String uidKey = 'uid';
  static const String activeKey = 'active';
  static const String imgKey = 'img';
  static const String nameKey = 'name';
  static const String emailKey = 'email';
  static const String phoneKey = 'phone';
  static const String addressKey = 'address';
  static const String passwordKey = 'password';
  static Future<void> setUserF({
    String token = "",
    String uid = "",
    String active = "",
    String img = "",
    String name = "",
    String email = "",
    String phone = "",
    String address = "",
    String password = "",
  }) async {
    await SharedPreferences.getInstance().then((prefs) {
      if (token.isNotEmpty) {
        prefs.setString(tokenKey, token);
      }
      if (uid.isNotEmpty) {
        prefs.setString(uidKey, uid);
      }
      if (active.isNotEmpty) {
        prefs.setString(activeKey, active.toString());
      }
      if (img.isNotEmpty) {
        prefs.setString(imgKey, img);
      }
      if (name.isNotEmpty) {
        prefs.setString(nameKey, name);
      }
      if (email.isNotEmpty) {
        prefs.setString(emailKey, email);
      }
      if (phone.isNotEmpty) {
        prefs.setString(phoneKey, phone);
      }
      if (addressKey.isNotEmpty) {
        prefs.setString(addressKey, address);
      }
      if (passwordKey.isNotEmpty) {
        prefs.setString(passwordKey, password);
      }
    });
  }

  static Future<AuthModel?> getUserData() async {
    final prefs = await SharedPreferences.getInstance();
    final token = prefs.getString(tokenKey).toString();
    final uid = prefs.getString(uidKey).toString();
    final active = prefs.getString(activeKey).toString();
    final img = prefs.getString(imgKey).toString();
    final name = prefs.getString(nameKey).toString();
    final email = prefs.getString(emailKey).toString();
    final phone = prefs.getString(phoneKey).toString();
    final address = prefs.getString(addressKey).toString();
    final password = prefs.getString(passwordKey).toString();

    return AuthModel(
      token: token,
      id: uid,
      isActive: active == "true" ? true : false,
      img: img,
      name: name,
      email: email,
      phone: phone,
      address: address,
      password: password,
    );
  }

  static clear() async {
    final prefs = await SharedPreferences.getInstance();
    prefs.clear();
  }
}
