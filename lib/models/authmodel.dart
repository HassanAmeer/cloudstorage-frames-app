import 'package:cloudstorage/helpers/nullables.dart';

class AuthModel {
  String token;
  String id;
  bool isActive;
  String img;
  String name;
  String email;
  String address;
  String password;
  String phone;

  AuthModel({
    this.token = "",
    this.id = "",
    this.isActive = false,
    this.img = "",
    this.name = "",
    this.email = "",
    this.address = "",
    this.password = "",
    this.phone = "0301",
  });

  factory AuthModel.fromJson(Map<String, dynamic> json) {
    return AuthModel(
      token: json['token'].toString().toNullString(),
      id: json['id'].toString().toNullString(),
      isActive: json['isActive'].toString() == "1" ? true : false,
      img: json['img'].toString().toNullString(),
      name: json['name'].toString().toNullString(),
      address: json['address'].toString().toNullString(),
      email: json['email'].toString().toNullString(),
      password: json['password'].toString().toNullString(),
      phone: json['phone'].toString().toNullString(),
    );
  }

  Map<String, dynamic> toJson() {
    return {
      'token': token,
      'id': id,
      'isActive': isActive,
      'img': img,
      'name': name,
      'email': email,
      'address': address,
      'password': password,
      'phone': phone,
    };
  }
}
