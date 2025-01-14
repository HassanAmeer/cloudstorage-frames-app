import '../helpers/nullables.dart';

class NotifyModel {
  final String id;
  final String uid;
  final String title;
  final String desc;
  final String createdAt;
  final String updatedAt;

  NotifyModel({
    this.id = "",
    this.uid = "",
    this.title = "",
    this.desc = "",
    this.createdAt = "",
    this.updatedAt = "",
  });

  factory NotifyModel.fromJson(Map<String, dynamic> json) {
    return NotifyModel(
      id: json['id'].toString().toNullString(),
      uid: json['uid'].toString().toNullString(),
      title: json['title'].toString().toNullString(),
      desc: json['desc'].toString().toNullString(),
      createdAt: json['created_at'].toString().toNullString(),
      updatedAt: json['updated_at'].toString().toNullString(),
    );
  }

  Map<String, dynamic> toJson() {
    return {
      'id': id,
      'uid': uid,
      'title': title,
      'desc': desc,
      'created_at': createdAt.toString().toNullString(),
      'updated_at': updatedAt.toString().toNullString(),
    };
  }
}
