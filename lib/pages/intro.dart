import '../constant/images.dart';
import 'package:flutter/material.dart';
import 'package:lottie/lottie.dart';

import '../storage/config.dart';
import 'auth/login.dart';

class IntroPage extends StatefulWidget {
  const IntroPage({super.key});

  @override
  State<IntroPage> createState() => _IntroPageState();
}

class _IntroPageState extends State<IntroPage> {
  final PageController _controller = PageController();
  int _currentIndex = 0;

  // List of intro data
  final List<_IntroData> _introData = [
    _IntroData(
      image: AppJson.folder,
      title: 'Store and Share Files',
      description:
          'Stories4Generations.com allows you to EASILY & SIMPLY upload, download, and share.  We will make a video from your photos and provide you the link to share to any of YOUR chosen contacts',
    ),
    _IntroData(
      image: AppJson.lock,
      title: 'Secure',
      description:
          'Files are safe, confidential, and protected utilizing state-of-the-art security on world class, branded, encrypted servers.',
    ),
    _IntroData(
      image: AppJson.share,
      title: 'Easy to Use',
      description:
          'Stories4Generations.com offers a user-friendly App which allows you and “those you invite” to easily upload photos for an event, a trip, a family reunion….then easily SHARE the event with friends & family!',
    ),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.white,
      body: SafeArea(
        child: Column(
          children: [
            Expanded(
              child: PageView.builder(
                controller: _controller,
                onPageChanged: (index) {
                  setState(() {
                    _currentIndex = index;
                  });
                },
                itemCount: _introData.length,
                itemBuilder: (context, index) {
                  return _IntroPageItem(data: _introData[index]);
                },
              ),
            ),
            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 20, vertical: 10),
              child: Column(
                children: [
                  Row(
                    mainAxisAlignment: MainAxisAlignment.spaceBetween,
                    children: [
                      if (_currentIndex > 0)
                        TextButton(
                          onPressed: () {
                            _controller.previousPage(
                              duration: const Duration(milliseconds: 500),
                              curve: Curves.ease,
                            );
                          },
                          child: const Text(
                            'Prev',
                            style: TextStyle(color: Colors.indigo),
                          ),
                        )
                      else
                        const SizedBox(width: 60),
                      Row(
                        children: List.generate(
                          _introData.length,
                          (index) => Padding(
                            padding: const EdgeInsets.symmetric(horizontal: 4),
                            child: Container(
                              width: 10,
                              height: 10,
                              decoration: BoxDecoration(
                                color: _currentIndex == index
                                    ? Colors.indigo
                                    : Colors.grey[300],
                                shape: BoxShape.circle,
                              ),
                            ),
                          ),
                        ),
                      ),
                      if (_currentIndex < _introData.length - 1)
                        TextButton(
                          onPressed: () {
                            _controller.nextPage(
                              duration: const Duration(milliseconds: 500),
                              curve: Curves.ease,
                            );
                          },
                          child: const Text(
                            'Next',
                            style: TextStyle(color: Colors.indigo),
                          ),
                        )
                      else
                        const SizedBox(width: 60),
                    ],
                  ),
                  const SizedBox(height: 20),
                  if (_currentIndex == _introData.length - 1)
                    SizedBox(
                      width: double.infinity,
                      child: ElevatedButton(
                        onPressed: () async {
                          await Config().setConfig(isVFirstTime: true);

                          Navigator.of(context).push(MaterialPageRoute(
                              builder: (context) => const LoginPage()));
                        },
                        style: ElevatedButton.styleFrom(
                          backgroundColor: Colors.indigo,
                          padding: const EdgeInsets.symmetric(vertical: 15),
                          shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(8),
                          ),
                        ),
                        child: const Text(
                          'Continue',
                          style: TextStyle(color: Colors.white),
                        ),
                      ),
                    ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}

class _IntroPageItem extends StatelessWidget {
  const _IntroPageItem({
    required this.data,
  });

  final _IntroData data;

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.all(20.0),
      child: Column(
        children: [
          // Image Section
          Expanded(
            flex: 5,
            child: Lottie.asset(
              data.image,
              fit: BoxFit.contain,
            ),
          ),

          const SizedBox(height: 30),

          // Title
          Text(
            data.title,
            style: const TextStyle(
              fontSize: 24,
              fontWeight: FontWeight.bold,
              color: Colors.indigo,
            ),
            textAlign: TextAlign.center,
          ),

          const SizedBox(height: 15),

          // Description
          Text(
            data.description,
            style: const TextStyle(
              fontSize: 16,
              color: Colors.black54,
            ),
            textAlign: TextAlign.center,
          ),

          const SizedBox(height: 30),
        ],
      ),
    );
  }
}

// Model class for intro data
class _IntroData {
  final String image;
  final String title;
  final String description;

  _IntroData({
    required this.image,
    required this.title,
    required this.description,
  });
}
