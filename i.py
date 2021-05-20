import instaloader
import pandas as pd

# Create an instance of Instaloader class
bot = instaloader.Instaloader()

# Load a profile from an Instagram handle
profile = instaloader.Profile.from_username(bot.context,'that_browneyes_girl')

columns = ['username', 'user_id', 'count', 'followers', 'followees', 'bio']
    
dataframe = pd.DataFrame(columns=[])

username= profile.username
user_id= profile.userid
count= profile.mediacount
followers=profile.followers
followees= profile.followees
bio=profile.biography,profile.external_url
minedata = {'username' : username,'user_id':user_id, 'count': count,  'followers' : followers, 'followees' :followees, 'bio':bio}
df1 = dataframe.append(minedata, ignore_index=True)
print(df1)
df1.to_csv('insta_data.csv', mode='a', index = False, header=None)
df_result = pd.read_csv('insta_data.csv', index_col=0).reset_index(drop = True, inplace = True)

