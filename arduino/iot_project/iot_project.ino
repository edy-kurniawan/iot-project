

// Modul ESP
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
#include <ArduinoJson.h>

// pin sensor LDR
#define sensorLDR A0

// pin relay
const int relay1 = D1;
const int relay2 = D2;

// Wifi Connection
const char* ssid = "CJIOffice";
const char* password = "jangantanyambakWening";

// Domain Name with full URL Path for HTTP POST Request
const char* serverName = "http://connectis.my.id:3000";

// FOR Decode JSON
char msg[300];

// set variable untuk sensor ldr
int nilaiSensor;

void setup() {
  Serial.begin(9600);

  // set mode relay
  pinMode(relay1, OUTPUT);
  pinMode(relay2, OUTPUT);
  digitalWrite(relay1, LOW);
  digitalWrite(relay2, LOW);

  // ESP init
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.println("Connecting ... ");  // Start Printing
  }
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());

  // set title app
  Serial.println("WEBSOCKET CLIENT");
  delay(2000);
}

void loop() {
  // nilaiSensor = analogRead(sensorLDR);
  int nialiSensor = random(200);
  Serial.print("Nilai Sensor : ");
  Serial.println(nilaiSensor);

  // post data sensor ldr to server
  if (WiFi.status() == WL_CONNECTED) {
    WiFiClient client;
    HTTPClient http;

    // Your Domain name with URL path or IP address with path
    http.begin(client, serverName);

    // Specify content-type header
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");
    // Data to send with HTTP POST
    String httpRequestData = "&ldr_value=" + nilaiSensor;
    // Send HTTP POST request
    int httpResponseCode = http.POST(httpRequestData);

    String payload = http.getString();
    Serial.println("");
    Serial.println("Response API : ");
    Serial.println(payload);

    // decode payload with ArduinoJson 6
    StaticJsonDocument<300> doc;
    deserializeJson(doc, payload);
    JsonObject root = doc.as<JsonObject>();

    Serial.println(root["status"]);
    Serial.println(root["relay_1"]);
    Serial.println(root["relay_2"]);

    // check status relay 1
    if (String(root["relay_1"]) == "1") {
      digitalWrite(relay1, HIGH);
      Serial.println("relay1 ON");
    } else {
      digitalWrite(relay1, LOW);
      Serial.println("relay1 OFF");
    }

    // check status relay 2
    if (String(root["relay_2"]) == "1") {
      digitalWrite(relay2, HIGH);
      Serial.println("relay2 ON");
    } else {
      digitalWrite(relay2, LOW);
      Serial.println("relay2 OFF");
    }

    // Free resources
    http.end();
  }

  // set delay 30 detik 
  delay(30000);
}