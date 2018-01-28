import json
from watson_developer_cloud import NaturalLanguageUnderstandingV1
from watson_developer_cloud.natural_language_understanding_v1 \
  import Features, EntitiesOptions, KeywordsOptions

natural_language_understanding = NaturalLanguageUnderstandingV1(
  username='3eee0960-2838-4eb2-b408-d1261b366c17',
  password='4fb5GBn1q0ov',
  version='2017-02-27')

response = natural_language_understanding.analyze(
  text='IBM is an American multinational technology company '
       'headquartered in Armonk, New York, United States, '
       'with operations in over 170 countries.',
  features=Features(
    entities=EntitiesOptions(
      emotion=True,
      sentiment=True,
      limit=2),
    keywords=KeywordsOptions(
      emotion=True,
      sentiment=True,
      limit=2)))

print(json.dumps(response, indent=2))