# # from elasticsearch import Elasticsearch 
# import os
# import glob
# import PyPDF2
# import pandas as pd

# os.chdir('storage/app/uploads')
# files=glob.glob("*.*")
# for book in files:
#     print(book)

# def extractPDFfiles(files):
#     this_loc =1
#     df=pd.DataFrame(columns =("name", "content"))

#     for file in files:
#         pdfFileObj = open(file, 'rb')
#         pdfReader = PyPDF2.PdfReader(pdfFileObj)
#         n_pages = len(pdfReader.pages)
#         print(n_pages)
#         this_doc =''
#         for i in range(n_pages):
#             pageObj = pdfReader.pages[i]
#             this_text= pageObj.extract_text()
#             this_doc+=this_text
#         df.loc[this_loc] = file, this_doc
#         this_loc = this_loc +1
#     return df
# df = extractPDFfiles(files)
# df.to_csv("hi.txt")

# # es = Elasticsearch("https://6b11b46e2f1142e3bd6bd25d809031ba.us-central1.gcp.cloud.es.io:443",
# #   api_key="cHRTZS1wQUJ2bG1BbllJaWh1SnM6U2xKWmpSdXpTX0t6U2QwbXl4M3BHUQ==")
# col_names = df.columns
# for row_number in range(df.shape[0]):
#     body = dict([(name, str(df.iloc[row_number][name])) for name in col_names])
#     print(body)
# # #     es.index(index = 'my_index2', document = body)

# # search_res = es.search(index ='my_index2',query={'match_phrase': {"content":"احمد"},} )
# # print(search_res['hits'])


# import regex as re

# text = """

# 85 231741003045 داود سعيد باسم علي 59 57 64 غ55 53 0 راسب 1  0.00
# 69 231741003061 عباس علي حيدر كرار 50 50 53 55 50 50 377 ناجح 2  53.86
# 93 231841003001 صالح حسن علي الحسن ابا 81 72 56 56 61 74 493 ناجح 3  70.43
# 88 231841003002 جاسم شاكر عداي اثير 71 75 91 80 76 89 570 ناجح 4  81.43
# """

# # Compile the regex pattern
# pattern = re.compile(r"(?<=\d{12} )(.*?)(?=\d)")

# # Find all matches in the text
# matches = pattern.findall(text)

# print(matches) 

