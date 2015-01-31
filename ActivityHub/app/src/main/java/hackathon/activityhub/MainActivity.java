package hackathon.activityhub;

import android.app.Activity;
import android.content.Context;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Bundle;
import android.os.Handler;
import android.view.Menu;
import android.view.MenuItem;
import android.support.v4.widget.SwipeRefreshLayout;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import java.util.ArrayList;


public class MainActivity extends Activity {

    LocationManager locationmn;
    private SwipeRefreshLayout refreshview;
    private Handler handler = new Handler();
    private ArrayList<String> list = new ArrayList<String>();
    private ListView lv;
    private ArrayAdapter<String> arrayAdapter;
    double latitude;
    double longitude;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        locationmn = (LocationManager)getSystemService(Context.LOCATION_SERVICE);
        boolean network_enabled = locationmn.isProviderEnabled(LocationManager.NETWORK_PROVIDER);
        Location location;
        if(network_enabled){
            location = locationmn.getLastKnownLocation(LocationManager.NETWORK_PROVIDER);
            if(location!=null){
                longitude = location.getLongitude();
                latitude = location.getLatitude();
            }
        }
        lv = (ListView) findViewById(R.id.listView);
        list.add(String.valueOf(longitude));
        list.add(String.valueOf(latitude));
        arrayAdapter = new ArrayAdapter<String>(
                this,
                android.R.layout.simple_list_item_1, list
        );
        lv.setAdapter(arrayAdapter);
        refreshview = (SwipeRefreshLayout) findViewById(R.id.swipe);
        //refreshview.setColorSchemeResources(R.color.blue_bright, R.color.green_light,
        //    R.color.orange_light, R.color.red_light);
        refreshview.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                // get the new data from you data source
                // TODO : request data here
                // our swipeRefreshLayout needs to be notified when the data is returned in order for it to stop the animation
                handler.postDelayed(new Runnable() {
                    public void run() {
                        list.add("testAdd");
                        refreshview.setRefreshing(false);
                    }
                }, 1000);
                lv.setAdapter(arrayAdapter);
            }
        });
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
