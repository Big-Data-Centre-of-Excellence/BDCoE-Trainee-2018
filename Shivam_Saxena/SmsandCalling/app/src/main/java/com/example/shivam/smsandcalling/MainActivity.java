package com.example.shivam.smsandcalling;

import android.Manifest;
import android.annotation.SuppressLint;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.net.Uri;
import android.support.v4.app.ActivityCompat;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.telephony.SmsManager;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText phoneNumber;
    EditText message;
    Button calling;
    Button sending;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        phoneNumber = (EditText) findViewById(R.id.myPhone);
        message = (EditText) findViewById(R.id.myMsg);
        calling = (Button) findViewById(R.id.call);
        sending = (Button) findViewById(R.id.send);
        calling.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String tel = "tel:" + phoneNumber.getText().toString();
                Intent callIntent = new Intent(Intent.ACTION_CALL);
                //Intent callIntent=new Intent(this,SecondActivity);
                //startActivity(callIntent);
                callIntent.setData(Uri.parse(tel));
                if (ActivityCompat.checkSelfPermission(MainActivity.this, Manifest.permission.CALL_PHONE) != PackageManager.PERMISSION_GRANTED) {
                    //If we are in another activity, we will use getApplicationContext()
                    // TODO: Consider calling
                    //    ActivityCompat#requestPermissions
                    // here to request the missing permissions, and then overriding
                    //   public void onRequestPermissionsResult(int requestCode, String[] permissions,
                    //                                          int[] grantResults)
                    // to handle the case where the user grants the permission. See the documentation
                    // for ActivityCompat#requestPermissions for more details.
                    return;
                }
                startActivity(callIntent);
            }
        });
        sending.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                SmsManager manager= SmsManager.getDefault();
                manager.sendTextMessage(phoneNumber.getText().toString(),
                        null,
                        message.getText().toString(),null,null);
                Toast.makeText(MainActivity.this,"Your message has been sent",Toast.LENGTH_LONG).show();
            }
        });
    }
}