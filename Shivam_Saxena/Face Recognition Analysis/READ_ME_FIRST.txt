Aim: To compare the accuracy of 3 Face recognition algorithms:
	LBPH(Local Binary Pattern Histograms): https://ieeexplore.ieee.org/document/1717463/
	EigenFaces: https://ieeexplore.ieee.org/document/4136875/
	FisherFaces: https://ieeexplore.ieee.org/document/959216/

Requirements: 	OpenCv3 for python
		Numpy for python

About the Dataset:
	Folders s0 and s1 contains training data on which each model is trained.
		s0 contains 20 images of Cristiano Ronaldo
		s1 contains 20 images of Lionel Messi
	Folder test contains testing images

Result:
	It was observed that the accuracy of each model for the given dataset follows the order:
		FisherFaces Model > EigenFaces Model > LBPH Model

*Note: Accuracy order may be different for different datasets

Some Other resources:
	http://disp.ee.ntu.edu.tw/~pujols/Eigenfaces%20and%20Fisherfaces.pdf
	https://towardsdatascience.com/face-recognition-how-lbph-works-90ec258c3d6b
	http://www.ijsrp.org/research-paper-0218/ijsrp-p7433.pdf
	https://www.vocal.com/video/face-detection-using-viola-jones-algorithm/
	http://openbio.sourceforge.net/resources/eigenfaces/eigenfaces-html/facesOptions.html
	http://www.face-rec.org/algorithms/pca/jcn.pdf