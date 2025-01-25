import 'package:firebase_core/firebase_core.dart';

import 'firebase_options.dart';
import 'splash.dart';
import 'constant/colors.dart';
import 'provider/authVm.dart';
import 'provider/configVm.dart';
import 'provider/foldersVm.dart';
import 'provider/upgradingVm.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:flutter_stripe/flutter_stripe.dart';
import 'package:flutter_easyloading/flutter_easyloading.dart';

void main() async {
  WidgetsFlutterBinding.ensureInitialized();
  await Firebase.initializeApp();

  await Firebase.initializeApp(options: DefaultFirebaseOptions.currentPlatform);

  Stripe.publishableKey =
      'pk_test_51NWbaPDPiaFCF9z8DVB7QNOwHIviBBbaqWZjN5EcVjsYxFh9pdxXV9bLTyzncAwxy0Y3Y71X9nQgHiZhrXSUtoFo00TVysbfEy';

  // runApp(const MyApp());
  runApp(MultiProvider(providers: [
    ChangeNotifierProvider<AuthVm>(create: (_) => AuthVm()),
    ChangeNotifierProvider<ConfigVm>(create: (_) => ConfigVm()),
    ChangeNotifierProvider<FoldersVm>(create: (_) => FoldersVm()),
    ChangeNotifierProvider<Upgrading>(create: (_) => Upgrading()),
  ], child: const MyApp()));
  configLoading();
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        title: 'Cloud Storage',
        theme: ThemeData(
            colorScheme:
                ColorScheme.fromSeed(seedColor: AppColors.primaryColor),
            useMaterial3: true),
        home: const SplashPage(),
        builder: EasyLoading.init());
  }
}

void configLoading() {
  EasyLoading.instance
    ..displayDuration = const Duration(milliseconds: 2000)
    ..indicatorType = EasyLoadingIndicatorType.wanderingCubes
    ..loadingStyle = EasyLoadingStyle.dark
    ..indicatorSize = 45.0
    ..radius = 10.0
    ..progressColor = Colors.indigoAccent
    ..backgroundColor = Colors.black45
    ..indicatorColor = Colors.indigoAccent
    ..textColor = Colors.indigoAccent
    ..maskColor = Colors.black45
    ..userInteractions = true
    ..dismissOnTap = false;
  // ..customAnimation = CustomAnimation();
}

// admin/helpers/scaffold
// admin/helpers/terminal/database



///////
// when create folder pass these values
// folderName
// totalspace
// subscription

//////// wheen buy folder or buy frames thees create ranscation api
///make google sing in 
///create notifications 
///create shared folder
///in more page see remaining things
///
///also send emails and notifcations
///
///
///
///
///
///
///
///
///
///
///
///use App\Models\notify;
/// $notify = notify::create([
//                   'uid' => $user->uid,
//                   'title' => "Account Created", 
//                   'desc' => "🔑 Your Account is Created successfully", 
//             ]);
// ///
// 