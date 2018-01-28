import json
from watson_developer_cloud import VisualRecognitionV3 as vr

visual_recognition = vr(
    '2016-05-20',
    api_key='cf2bb94c7e44a58c8a3785d1d33b4443f2d951f0')

with open('./frog.jpg', 'rb') as images_file:
    classes = visual_recognition.classify(
        images_file,
        parameters=json.dumps({
            'classifier_ids': ["Memes_1981654798"]
        }))
print(json.dumps(classes, indent=2))
