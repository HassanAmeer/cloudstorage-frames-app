import '../helpers/nullables.dart';

class FolderModel {
  String id;
  String uid;
  String subscription;
  String folderId;
  String folderName;
  var usedSize;
  String totalSize;
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
    this.usedSize = "",
    this.totalSize = "",
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
        usedSize: json["usedsize"].toString(),

        // usedSize: (int.parse(json["usedsize"].toString().toNullString()) > 1024
        //     ? (int.parse(json["usedsize"].toString().toNullString()) / 1024)
        //         .toStringAsFixed(1)
        //     : int.parse(json["usedsize"].toString().toNullString()).toString()),

        // totalSize: json["totalsize"].toString().toNullString(),

        totalSize: (int.parse(json["totalsize"].toString().toNullString()) >
                1024
            ? (int.parse(json["totalsize"].toString().toNullString()) / 1024)
                .toStringAsFixed(1)
            : int.parse(json["totalsize"].toString().toNullString())
                .toString()),

        items: List<String>.from(json["items"].map((x) => x)),
        shared: List<String>.from(json["shared"].map((x) => x.toString())),
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
        "totalsize": totalSize,
        "usedsize": usedSize,
        "items": List<dynamic>.from(items.map((x) => x)),
        "shared": List<dynamic>.from(shared.map((x) => x)),
        "created_at": createdAt.toString().toNullString(),
        "updated_at": updatedAt.toString().toNullString(),
        "deleted_at": deletedAt.toString().toNullString(),
      };
}
