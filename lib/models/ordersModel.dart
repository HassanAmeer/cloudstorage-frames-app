import 'package:cloudstorage/helpers/nullables.dart';

class OrdersModel {
  final String id;
  final String uid;
  final String status;
  final List<String> images;
  final List<String> slides;
  final List<String> frames;
  final String price;
  final String isPay;
  final String trId;
  final String desc;
  final String createdAt;
  final String updatedAt;
  final String? deletedAt;

  OrdersModel({
    this.id = "",
    this.uid = "",
    this.status = "",
    this.images = const [],
    this.slides = const [],
    this.frames = const [],
    this.price = "",
    this.isPay = "",
    this.trId = "",
    this.desc = "",
    this.createdAt = "",
    this.updatedAt = "",
    this.deletedAt = "",
  });

  factory OrdersModel.fromJson(Map<String, dynamic> json) {
    return OrdersModel(
      id: json['id'].toString().toNullString(),
      uid: json['uid'].toString().toNullString(),
      status: json['status'].toString().toNullString(),
      images: List<String>.from(json['images'] ?? []),
      slides: List<String>.from(json['slides'] ?? []),
      frames: List<String>.from(json['frames'] ?? []),
      price: json['price'].toString().toNullString(),
      isPay: json['isPay'].toString().toNullString(),
      trId: json['trId'].toString().toNullString(),
      desc: json['desc'].toString().toNullString(),
      createdAt: json['created_at'].toString().toNullString(),
      updatedAt: json['updated_at'].toString().toNullString(),
      deletedAt: json['deleted_at'].toString().toNullString(),
    );
  }

  Map<String, dynamic> toJson() {
    return {
      'id': id,
      'uid': uid,
      'status': status,
      'images': images,
      'slides': slides,
      'frames': frames,
      'price': price,
      'isPay': isPay,
      'trId': trId,
      'desc': desc,
      'created_at': createdAt.toString().toNullString(),
      'updated_at': updatedAt.toString().toNullString(),
      'deleted_at': deletedAt.toString().toNullString(),
    };
  }
}
