import pandas as pd
import numpy as np
  
  
# Reading the csv file
df_new = pd.read_csv('insta_data.csv')
  
# saving xlsx file
inta = pd.ExcelWriter('data.xlsx')
df_new.to_excel(inta, index = False)
  
inta.save()