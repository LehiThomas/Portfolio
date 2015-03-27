package app.src.main.java.com.example.lehi.jsonexample;


import android.app.ProgressDialog;
import android.content.Context;
import android.os.AsyncTask;
import android.os.Bundle;
import android.app.Activity;
import android.util.Log;
import android.view.Menu;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListView;

import org.apache.http.HttpResponse;
import org.apache.http.StatusLine;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedInputStream;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class MainActivity extends Activity {

    ListView videoList;
    ArrayList<String> videoArrayList = new ArrayList<String>();
    ArrayAdapter<String> videoAdapter;
    Context context;
    String feedUrl = "https://gdata.youtube.com/feeds/api/standardfeeds/US/most_viewed?v=2&alt=jsonc";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        context = this;
        videoList = (ListView) findViewById(R.id.videoList);

        videoAdapter = new ArrayAdapter<String>(this, R.layout.video_list_item, videoArrayList);
        videoList.setAdapter(videoAdapter);

        VideoListTask loaderTask = new VideoListTask();
        loaderTask.execute();
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items
        //to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    public class VideoListTask extends AsyncTask<Void, Void, Void>{

        ProgressDialog dialog;
        @Override
        protected void onPreExecute(){
            dialog = new ProgressDialog(context);
            dialog.setTitle("Loading Videos");
            dialog.show();
            super.onPreExecute();
        }

        @Override
        protected Void doInBackground(Void... params) {
            try {
                Thread.sleep(2000);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
            HttpClient client = new DefaultHttpClient();
            HttpGet getVideos = new HttpGet(feedUrl);

            try {
                HttpResponse response = client.execute(getVideos);
                StatusLine statusLine = response.getStatusLine();
                int statusCode = statusLine.getStatusCode();
                if (statusCode != 200){
                    return null;
                }
                InputStream jsonStream = response.getEntity().getContent();
                BufferedReader reader = new BufferedReader(new InputStreamReader(jsonStream));
                StringBuilder builder = new StringBuilder();
                String line;
                while((line = reader.readLine()) != null){
                    builder.append(line);
                }
                String jsonData = builder.toString();

                JSONObject json = new JSONObject(jsonData);
                JSONObject data = json.getJSONObject("data");
                JSONArray items = data.getJSONArray("items");

                for(int i = 0; i <items.length(); i++){
                    JSONObject video = items.getJSONObject(i);
                    String title = video.getString("title");
                    videoArrayList.add(title);
                }


            } catch (IOException e) {
                e.printStackTrace();
            } catch (JSONException e) {
                e.printStackTrace();
            }
            return null;
        }

        @Override
        protected void onPostExecute(Void result){
            try {
                if ((dialog != null) && dialog.isShowing()) {
                    dialog.dismiss();
                }
            } catch (final IllegalArgumentException e) {
                // Handle or log or ignore
            }
            videoAdapter.notifyDataSetChanged();
            super.onPostExecute(result);
        }
    }
}