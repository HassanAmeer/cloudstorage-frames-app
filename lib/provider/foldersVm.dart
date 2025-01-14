import 'dart:convert';
import 'dart:developer';
import 'dart:io';
import 'package:cloudstorage/constant/links.dart';
import 'package:connectivity_plus/connectivity_plus.dart';
import 'package:file_picker/file_picker.dart';
import 'package:flutter/material.dart';
import 'package:flutter_easyloading/flutter_easyloading.dart';
import 'package:provider/provider.dart';
import '../models/folderModel.dart';

import '../models/framesModel.dart';
import '../widgets/toast.dart';
import 'package:http/http.dart' as http;

import 'authVm.dart';

class FoldersVm with ChangeNotifier {
  String isLoadingForId = "";
  bool _isLoading = false;
  bool get isLoading => _isLoading;
  set isLoadingF(bool value) {
    _isLoading = value;
    notifyListeners();
  }

  List<FolderModel> foldersList = [];
  List allMediaList = [];
  ////////////////////
  Future getAllFolders(context, {token = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      var response = await http
          .get(Uri.parse(ApiLinks.baseUrl + ApiLinks.storage), headers: {
        "Content-Type": "application/json",
        'Authorization': 'Bearer $token'
      });
      debugPrint("👉 getfolders: ${response.body}");
      var dresp = jsonDecode(response.body);

      if (response.statusCode == 200 || response.statusCode == 201) {
        if (dresp['storage'].isEmpty || dresp['storage'] == null) {
          foldersList = [];
        } else {
          foldersList = [];
          for (int i = 0; i < dresp['storage'].length; i++) {
            foldersList.add(FolderModel.fromJson(dresp['storage'][i]));
          }

          allMediaList = [];
          for (int i = 0; i < dresp['storage'].length; i++) {
            allMediaList.addAll(dresp['storage'][i]['items']);
          }
        }
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      log("👉 ${dresp['storage']}");
    } catch (e, st) {
      debugPrint("💥 error: $e , st:$st");
      snackBarColorF("$e", context);
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

  //////////////////////////
  List<Map<String, dynamic>> selectedFramesLinkList = [];
  selectedFramesLinkListF({required String imgId, required String imgLink}) {
    Map<String, dynamic> frameLink = {
      'imgId': imgId,
      'imgLink': imgLink,
      "saved": false
    };
    if (!selectedFramesLinkList.any((element) =>
        element['imgLink'] == imgLink && element['imgId'] == imgId)) {
      selectedFramesLinkList.add(frameLink);
    }
    notifyListeners();
  }

  saveSelectedFramesLinkListF({required String imgId, required bool saved}) {
    if (selectedFramesLinkList.any((element) => element['imgId'] == imgId)) {
      selectedFramesLinkList
          .firstWhere((element) => element['imgId'] == imgId)['saved'] = saved;
    }
    notifyListeners();
  }

  removeSelectedFramesLinkListF({required String imgLink}) {
    selectedFramesLinkList
        .removeWhere((element) => element['imgLink'] == imgLink);
    notifyListeners();
  }

  clearAllSelectedFramesLinkListF() {
    selectedFramesLinkList.clear();
    selectedFramesLinkList = [];
    notifyListeners();
  }

  // List<int> forBuyFramesIdList = [];
  // addforBuyFramesIdListF(v) {
  //   if (!forBuyFramesIdList.contains(v)) {
  //     forBuyFramesIdList.add(v);
  //   }
  //   notifyListeners();
  // }

  // clearforBuyFramesIdListF(v) {
  //   forBuyFramesIdList.clear();
  //   notifyListeners();
  // }
  //////////////////////////

  List<FramesModel> framesList = [];

  ////////////////////
  Future getAllFrames(context, {token = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }

      var response = await http.get(
          Uri.parse(ApiLinks.baseUrl + ApiLinks.getframes),
          headers: {'Authorization': 'Bearer $token'});
      var dresp = jsonDecode(response.body);

      if (response.statusCode == 200 || response.statusCode == 201) {
        if (dresp['frames'].isEmpty || dresp['frames'] == null) {
          framesList = [];
        } else {
          framesList = [];
          for (int i = 0; i < dresp['frames'].length; i++) {
            framesList.add(FramesModel.fromJson(dresp['frames'][i]));
          }
        }
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      log("👉 ${dresp['frames']}");
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }
  ////////

////////////////////////
  Future createFolderF(context,
      {String token = "", String folderName = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }
      var token = Provider.of<AuthVm>(context, listen: false).userProfile.token;
      if (token.isEmpty) {
        snackBarColorF("Token is required", context);
        return;
      }

      if (folderName.isEmpty) {
        snackBarColorF("Folder Name is required", context);
        return;
      }
      notifyListeners();

      var resp = await http.post(
          Uri.parse(ApiLinks.baseUrl + ApiLinks.makefolder),
          body: {"folderName": folderName},
          headers: {'Authorization': 'Bearer $token'});
      var respd = jsonDecode(resp.body);
      if (resp.statusCode == 200 || resp.statusCode == 201) {
        snackBarColorF("${respd['message']}", context);
        await getAllFolders(context, token: token).then((v) {
          isLoadingF = false;
          notifyListeners();
        });
      } else {
        snackBarColorF("${respd['message']}", context);
      }
      log("👉 folder Created Resp: $respd");
    } catch (e, st) {
      isLoadingF = false;
      notifyListeners();
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

  bool _isLoadingForRename = false;
  bool get isLoadingForRename => _isLoadingForRename;
  set isLoadingForRenameF(bool value) {
    _isLoadingForRename = value;
    notifyListeners();
  }

  Future renameFolderF(context,
      {String token = "", String folderId = "", String folderName = ""}) async {
    isLoadingForRenameF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }
      var token = Provider.of<AuthVm>(context, listen: false).userProfile.token;
      if (token.isEmpty) {
        snackBarColorF("Token is required", context);
        return;
      }

      if (folderName.isEmpty) {
        snackBarColorF("Folder Name is required", context);
        return;
      }
      notifyListeners();

      var resp = await http.post(
          Uri.parse(ApiLinks.baseUrl + ApiLinks.renamefolder),
          body: {"folderid": folderId, "newName": folderName},
          headers: {'Authorization': 'Bearer $token'});
      var respd = jsonDecode(resp.body);
      if (resp.statusCode == 200 || resp.statusCode == 201) {
        // snackBarColorF("${respd['message']}", context);
        EasyLoading.showSuccess("${respd['message']}");
        // await getAllFolders(context, token: token).then((v) {
        //   isLoadingForRenameF = false;
        //   notifyListeners();
        // });

        foldersList.firstWhere((element) => element.id == folderId).folderName =
            folderName;
        isLoadingForRenameF = false;
        notifyListeners();
      } else {
        // snackBarColorF("${respd['message']}", context);
        EasyLoading.showSuccess("${respd['message']}");
      }
      log("👉 folder Renamed Resp: $respd");
      Navigator.pop(context);
    } catch (e, st) {
      isLoadingForRenameF = false;
      notifyListeners();
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
    } finally {
      isLoadingForRenameF = false;
      notifyListeners();
    }
  }

  ///////////////////////////////////////////
  Future buyFrames(context, {String token = "", String frameId = ""}) async {
    isLoadingF = true;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }
      // var token = Provider.of<AuthVm>(context, listen: false).userProfile.token;
      if (token.isEmpty) {
        snackBarColorF("frame Id Is Requirred", context);
        return;
      }
      notifyListeners();

      var resp = await http.post(
          Uri.parse(ApiLinks.baseUrl + ApiLinks.buyFrames),
          body: {"frameid": frameId},
          headers: {'Authorization': 'Bearer $token'});
      var respd = jsonDecode(resp.body);
      if (resp.statusCode == 200 || resp.statusCode == 201) {
        // snackBarColorF("${respd['message']}", context);
        await getAllFrames(context, token: token).then((v) {
          isLoadingF = false;
          notifyListeners();
        });
      } else {
        snackBarColorF("${respd['message']}", context);
      }
      log("👉 Buy Frames Resp: $respd");
    } catch (e, st) {
      isLoadingF = false;
      notifyListeners();
      debugPrint("💥 error: $e , st:$st");
      snackBarColorF("$e", context);
    } finally {
      isLoadingF = false;
      notifyListeners();
      Navigator.pop(context); // for hide stripe payment popup
    }
  }

  /////////////

  bool _isLoadingForDelete = false;

  bool get isLoadingForDelete => _isLoadingForDelete;
  set isLoadingForDeleteF(bool value) {
    _isLoadingForDelete = value;
    notifyListeners();
  }

  deleteFolderF(context, {String token = "", String folderId = ""}) async {
    isLoadingForDeleteF = true;
    isLoadingForId = folderId;

    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }
      // var token = Provider.of<AuthVm>(context, listen: false).userProfile.token;
      if (token.isEmpty) {
        snackBarColorF("Token is required", context);
        return;
      }

      notifyListeners();

      var resp = await http.delete(
          Uri.parse(ApiLinks.baseUrl + ApiLinks.delfolder),
          body: {"folderid": folderId.toString()},
          headers: {'Authorization': 'Bearer $token'});
      var respd = jsonDecode(resp.body);
      if (resp.statusCode == 200 || resp.statusCode == 201) {
        EasyLoading.showSuccess("Folder Deleted");
        // snackBarColorF("${respd['message']}", context);
        // await getAllFolders(context, token: token).then((v) {
        //   isLoadingForDeleteF = false;
        //   notifyListeners();
        // });

        foldersList.removeWhere((element) => element.id == folderId);
        isLoadingForDeleteF = false;
        notifyListeners();
      } else {
        EasyLoading.showError("${respd['message']}");
        // snackBarColorF("${respd['message']}", context);
      }
    } catch (e, st) {
      isLoadingForDeleteF = false;
      notifyListeners();
      debugPrint("💥 error: $e , st:$st");
      snackBarColorF("$e", context);
    } finally {
      isLoadingForId = "";
      isLoadingForDeleteF = false;
      notifyListeners();
    }
  }

  /////////////

  bool _isLoadingForUpload = false;

  bool get isLoadingForUpload => _isLoadingForUpload;
  set isLoadingForUploadF(bool value) {
    _isLoadingForUpload = value;
    notifyListeners();
  }

  Future uploadFilesF(context,
      {String token = "",
      List<PlatformFile> files = const [],
      String folderId = ""}) async {
    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }
      if (token.isEmpty) {
        snackBarColorF("Token is required", context);
        return;
      }

      isLoadingForUploadF = true;
      notifyListeners();

      try {
        var request = http.MultipartRequest(
            'POST', Uri.parse(ApiLinks.baseUrl + ApiLinks.uploadfiles))
          ..headers['Authorization'] = 'Bearer $token'
          ..fields['folderid'] = folderId.toString();
        for (var i = 0; i < files.length; i++) {
          if (await File(files[i].path!).exists()) {
            request.files.add(
                await http.MultipartFile.fromPath('files[$i]', files[i].path!));
          }
        }
        var response = await request.send();
        var responseBody = await response.stream.bytesToString();

        if (response.statusCode == 200 || response.statusCode == 201) {
          EasyLoading.showSuccess("Files uploaded");
          await getFilesByFolderId(context,
              isLoading: false, token: token, folderId: folderId);
        } else {
          debugPrint("Response body: $responseBody");
          EasyLoading.showError("${jsonDecode(responseBody)['message']}");
        }
      } on SocketException catch (e, st) {
        EasyLoading.showError("No address associated with hostname, errno = 7");
        debugPrint(" error: $e , st:$st");
      }
    } catch (e, st) {
      isLoadingForUploadF = false;
      notifyListeners();
      debugPrint(" 💥 error: $e , st:$st");
      snackBarColorF("$e", context);
    } finally {
      isLoadingForUploadF = false;
      notifyListeners();
    }
  }

//

  List<FolderModel> getfilesbyfolderidList = [];

  Future getFilesByFolderId(context,
      {bool isLoading = true, String token = "", String folderId = ""}) async {
    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }
      if (token.isEmpty) {
        snackBarColorF("Token is required", context);
        return;
      }
      if (folderId.isEmpty) {
        snackBarColorF("Folder Id is required", context);
        return;
      }

      if (isLoading) {
        isLoadingF = true;
        notifyListeners();
      }
      var response = await http.get(
        Uri.parse(
            "${ApiLinks.baseUrl}${ApiLinks.getfilesbyfolderid}/$folderId"),
        headers: {'Authorization': 'Bearer $token'},
      );
      var dresp = jsonDecode(response.body);

      if (response.statusCode == 200 || response.statusCode == 201) {
        getfilesbyfolderidList = [FolderModel.fromJson(dresp['files'])];
      } else {
        snackBarColorF("${dresp['message']}", context);
      }
      isLoadingF = false;
      notifyListeners();
    } catch (e, st) {
      snackBarColorF("$e", context);
      debugPrint("💥 error: $e , st:$st");
      isLoadingF = false;
      notifyListeners();
    } finally {
      isLoadingF = false;
      notifyListeners();
    }
  }

//

  /////////////

  bool _isLoadingForDeleteFiles = false;

  bool get isLoadingForDeleteFiles => _isLoadingForDeleteFiles;
  set isLoadingForDeleteFilesF(bool value) {
    _isLoadingForDeleteFiles = value;
    notifyListeners();
  }

  deleteFolderFilesF(context,
      {String token = "", String folderId = "", String fileName = ""}) async {
    try {
      var connectivityResult = await (Connectivity().checkConnectivity());
      if (connectivityResult == ConnectivityResult.none) {
        snackBarColorF("🛜 Network Not Available", context);
        return;
      }
      // var token = Provider.of<AuthVm>(context, listen: false).userProfile.token;
      if (token.isEmpty) {
        snackBarColorF("Token is required", context);
        return;
      }

      isLoadingForDeleteFilesF = true;
      isLoadingForId = fileName;
      notifyListeners();

      var resp = await http
          .delete(Uri.parse(ApiLinks.baseUrl + ApiLinks.deletefile), body: {
        "folderid": folderId.toString(),
        "filename": "files/${fileName.split('/').last}"
      }, headers: {
        'Authorization': 'Bearer $token'
      });
      var respd = jsonDecode(resp.body);
      if (resp.statusCode == 200 || resp.statusCode == 201) {
        getfilesbyfolderidList.first.items
            .removeWhere((element) => element.toString() == fileName);
        isLoadingForDeleteFilesF = false;
        EasyLoading.showSuccess("File Deleted");
        notifyListeners();
      } else {
        EasyLoading.showError("${respd['message']}");
      }
    } catch (e, st) {
      isLoadingForDeleteFilesF = false;
      notifyListeners();
      debugPrint("💥 error: $e , st:$st");
      snackBarColorF("$e", context);
    } finally {
      isLoadingForId = "";
      isLoadingForDeleteFilesF = false;
      notifyListeners();
    }
  }
}
