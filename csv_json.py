"""
csv converter
Michael Hilton
software Methodology 
"""
import sys
import csv
import json

def sysargvcheck():
    if len(sys.argv) < 3:
      print "Csv Filename:" + str(sys.argv[1]) + "Json Filename:" + str(sys.argv[2])

def readcsv(csvfile):
     list = []
     name = str(sys.argv[1])
     csvfile = '%s.csv' % name
     with open(csvfile, 'r') as f:
       data = csv.DictReader(f)
       course = data.fieldnames
       for row in data:
           list.extend([{course[i]:row[course[i]] for i in range(len(course))}])     
     f.close()
     return (list)

def jsonconverter(list, jsonfile):
       name = str(sys.argv[2])
       jsonfile = '%s.js' % name
       with open(jsonfile, 'w') as f:
            f.write(json.dumps(list))
       f.close()


def main():
      try:
          sysargvcheck()
      except IndexError:
          print "Please enter a csv filename and json filename"
          sys.exit()
      csvdata = readcsv(sys.argv[1])
      jsonconverter(csvdata, sys.argv[2])

   

if __name__ == '__main__':
    main() 

     
