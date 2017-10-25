import csv
import json

csvinput = open('renamethis.csv', 'r')
jsonoutput = open('renamethis.json', 'w')

fields = ("Class Prefix","Class Number","Class Name","Hours","Availability")
scanner = csv.DictReader(csvinput, fields)
for row in reader:
    json.dump(row, jsonoutput)
    jsonoutput.write('\n')
