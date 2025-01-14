import 'dart:convert';

import '../helpers/nullables.dart';

class FramesModel {
  String id;
  String name;
  String image;
  String price;
  List uids;
  String show;
  String createdAt;
  String updatedAt;
  String deletedAt;

  FramesModel({
    this.id = "",
    this.name = "",
    this.image = "",
    this.price = "",
    this.uids = const [],
    this.show = "",
    this.createdAt = "",
    this.updatedAt = "",
    this.deletedAt = "",
  });

  factory FramesModel.fromJson(Map<String, dynamic> json) => FramesModel(
        id: json["id"].toString().toNullString(),
        name: json["name"].toString().toNullString(),
        image: json["image"].toString().toNullString(),
        price: json["price"].toString().toNullString(),
        uids: json["uids"] == null ? [] : jsonDecode(json["uids"]) as List,
        show: json["show"].toString().toNullString(),
        createdAt: json["created_at"].toString().toNullString(),
        updatedAt: json["updated_at"].toString().toNullString(),
        deletedAt: json["deleted_at"].toString().toNullString(),
      );

  Map<String, dynamic> toJson() => {
        "id": id,
        "name": name,
        "image": image,
        "price": price,
        "uids": uids,
        "show": show,
        "created_at": createdAt.toString().toNullString(),
        "updated_at": updatedAt.toString().toNullString(),
        "deleted_at": deletedAt,
      };
}
