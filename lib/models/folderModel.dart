import 'package:cloudstorage/helpers/nullables.dart';

class FolderModel {
  String id;
  String uid;
  String subscription;
  String folderId;
  String folderName;
  String folderUsedSpace;
  List<String> items;
  List<String> shared;
  String createdAt;
  String updatedAt;
  String deletedAt;

  FolderModel({
    this.id = "",
    this.uid = "",
    this.subscription = "",
    this.folderId = "",
    this.folderName = "",
    this.folderUsedSpace = "",
    this.items = const [],
    this.shared = const [],
    this.createdAt = "",
    this.updatedAt = "",
    this.deletedAt = "",
  });

  factory FolderModel.fromJson(Map<String, dynamic> json) => FolderModel(
        id: json["id"].toString().toNullString(),
        uid: json["uid"].toString().toNullString(),
        subscription: json["subscription"].toString().toNullString(),
        folderId: json["folderId"].toString().toNullString(),
        folderName: json["folderName"].toString().toNullString(),
        folderUsedSpace: json["folderUsedSpace"].toString().toNullString(),
        items: List<String>.from(json["items"].map((x) => x)),
        shared: List<String>.from(json["shared"].map((x) => x)),
        createdAt: json["created_at"].toString().toNullString(),
        updatedAt: json["updated_at"].toString().toNullString(),
        deletedAt: json["deleted_at"].toString().toNullString(),
      );

  Map<String, dynamic> toJson() => {
        "id": id,
        "uid": uid,
        "subscription": subscription,
        "folderId": folderId,
        "folderName": folderName,
        "folderUsedSpace": folderUsedSpace,
        "items": List<dynamic>.from(items.map((x) => x)),
        "shared": List<dynamic>.from(shared.map((x) => x)),
        "created_at": createdAt.toString().toNullString(),
        "updated_at": updatedAt.toString().toNullString(),
        "deleted_at": deletedAt.toString().toNullString(),
      };
}
