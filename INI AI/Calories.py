import warnings
warnings.filterwarnings("ignore", category=UserWarning)

import pandas as pd
from sklearn.neighbors import KNeighborsRegressor
from sklearn.preprocessing import LabelEncoder
from sklearn.metrics import mean_squared_error

# Fungsi untuk membaca data dari obesity atau dataset
def load_data(file_path):
    df = pd.read_csv(file_path)
    return df

# Fungsi untuk menentukan BMI berdasarkan tinggi badan, berat badan, usia, dan gender
def calculate_bmi(height, weight, age, gender):
    # Menghitung BMI
    bmi = weight / ((height/100) ** 2)  # Tinggi dalam meter, ubah cm ke m

    # Mengkoreksi BMI berdasarkan usia dan jenis kelamin
    if gender.lower() == 'male':
        bmi += (0.03 * age)  # Menambahkan 0.03 setiap tahun untuk pria
    elif gender.lower() == 'female':
        bmi += (0.02 * age)  # Menambahkan 0.02 setiap tahun untuk wanita
    
    return bmi

if __name__ == "__main__":
    # Membaca data dari dataset
    data = load_data("Dataset.csv")
    
    # Mengubah kolom Gender menjadi numerik menggunakan LabelEncoder
    label_encoder = LabelEncoder()
    data['Gender'] = label_encoder.fit_transform(data['gender'])

    # Memisahkan fitur input (X) dan output kelas (y)
    X = data[['age', 'weight(kg)', 'height(m)', 'Gender']]
    y = data['calories_to_maintain_weight']

    # Pelatihan model KNN
    knn_model = KNeighborsRegressor(n_neighbors=5)
    knn_model.fit(X, y)

    # Memasukkan inputan user
    height = float(input("Masukkan tinggi badan (cm): "))
    weight = float(input("Masukkan berat badan (kg): "))
    age = int(input("Masukkan usia: "))
    gender = input("Masukkan jenis kelamin (M/F): ")

    # Menghitung BMI
    bmi = calculate_bmi(height, weight, age, gender)

    # Memprediksi calories_to_maintain_weight berdasarkan BMI
    predicted_calories = knn_model.predict([[age, weight, height/100, label_encoder.transform([gender])[0]]])[0]

    # Menampilkan hasil prediksi
    print(f"Predicted Calories to Maintain Weight: {predicted_calories}")

    print("\n")

    print("Jumlah Tetangga:", knn_model.n_neighbors)
    # print("Kelas Target:", knn_model.classes_)
    print("Metrik Jarak:", knn_model.effective_metric_)
    # print("Output 2D:", knn_model.outputs_2d_)

    print("\n")

    # Memprediksi nilai calories_to_maintain_weight untuk seluruh data training
    y_pred_train = knn_model.predict(X)

    # Menghitung MSE model terhadap data training
    mse_train = mean_squared_error(y, y_pred_train)
    print("Mean Squared Error on Training Data:", mse_train)
