import 'package:cloudstorage/helpers/nullables.dart';

class PlanModel {
  String id;
  String title;
  List<String> desc;
  String price;
  String storage;
  String createdAt;
  String updatedAt;
  String deletedAt;

  PlanModel({
    this.id = "",
    this.title = "",
    this.desc = const [],
    this.price = "",
    this.storage = "",
    this.createdAt = "",
    this.updatedAt = "",
    this.deletedAt = "",
  });

  factory PlanModel.fromJson(Map<String, dynamic> json) => PlanModel(
        id: json["id"].toString().toNullString(),
        title: json["title"].toString().toNullString(),
        desc: List<String>.from(json["desc"].map((x) => x.toString())),
        price: json["price"].toString().toNullString(),
        storage: json["storage"].toString().toNullString(),
        createdAt: DateTime.parse(json["created_at"]).toString().toNullString(),
        updatedAt: DateTime.parse(json["updated_at"]).toString().toNullString(),
        deletedAt: json["deleted_at"].toString().toNullString(),
      );

  Map<String, dynamic> toJson() => {
        "id": id,
        "title": title,
        "desc": List<dynamic>.from(desc.map((x) => x)),
        "price": price,
        "storage": storage,
        "created_at": createdAt,
        "updated_at": updatedAt,
        "deleted_at": deletedAt,
      };
}
