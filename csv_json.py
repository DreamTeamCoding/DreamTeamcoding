import sys
import csv
import json

def sysargvcheck():
    if len(sys.argv) < 3
      print "Csv Filename:" + str(sys.argv[1]) + "Json Filename:" + str(sys.argv[2])

def readcsv(csvfile):
     list = []
     with open(csvfile, 'r') as f:
       data = csv.dictreader(f)
       course = data.fieldnames
       for row in data:
           list.extend([{course[i]:row[course[i]] for i in range(len(course))}])     f.close()
     jsonconverter(list)

def jsonconverter(list, jsonfile):
       with open(jsonfile, 'w') as f:
            f.write(json.dumps(list))
       f.close()


def main():
      csvfile = sys.argv[1]
      jsonfile = sys.argv[2]
      try:
          sysargvcheck()
      except IndexError:
          print "Please enter a csv filename and json filename"
          sys.exit()
      readcsvfile(csvfile)
      jsonconverter(list, jsonfile)

if __name__ == '__main__':
    main() 

     

