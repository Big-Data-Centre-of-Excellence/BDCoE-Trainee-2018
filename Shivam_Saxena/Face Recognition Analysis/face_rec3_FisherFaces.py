#Importing the libraries
import cv2
import numpy as np

#Importing the dataset
X=[]
y=[]
labels=['Cristiano Ronaldo','Lionel Messi']
for i in range(20):
    X.append(cv2.imread('s0/{}.jpg'.format(i)))
    y.append(0)
for i in range(20):
    X.append(cv2.imread('s1/{}.jpg'.format(i)))
    y.append(1)

#Detecting Faces and Coverting into GrayScale
def detect_face(img):
    gray=cv2.cvtColor(img,cv2.COLOR_BGR2GRAY)
    face_cascade = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
    faces = face_cascade.detectMultiScale(gray, scaleFactor=1.2, minNeighbors=5);
    if (len(faces) == 0):
        return cv2.resize(gray,(280,280))
    (x, y, w, h) = faces[0]
    return cv2.resize(gray[y:y+w, x:x+h],(280,280))


#Training the training set
X=list(map(detect_face,X))
face_recognizer=cv2.face.FisherFaceRecognizer_create()
face_recognizer.train(X,np.array(y))

#Predicting the results
def predict(test_img):
    label,dissimilarity= face_recognizer.predict(test_img)
    print('Subject:{}\nDissimilarity:{}'.format(labels[label],dissimilarity))
    return test_img

test_img=cv2.imread('test/4.jpg')
test_face=detect_face(test_img)
predicted_img=predict(test_face)
cv2.imshow('',predicted_img)
cv2.waitKey(0)
cv2.destroyAllWindows()

    


