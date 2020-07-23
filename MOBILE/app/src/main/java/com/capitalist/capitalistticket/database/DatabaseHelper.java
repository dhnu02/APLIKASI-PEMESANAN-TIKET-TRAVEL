<?xml version="1.0" encoding="utf-8"?>
<com.google.android.material.card.MaterialCardView xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:clipToPadding="true"
    app:cardCornerRadius="10dp"
    app:cardElevation="5dp"
    app:cardUseCompatPadding="true">

    <View
        android:layout_width="match_parent"
        android:layout_height="5dp"
        android:background="@color/colorPrimary" />

    <RelativeLayout
        android:layout_width="match_parent"
        android:layout_height="wrap_content"
        android:layout_margin="8dp">

        <ImageView
            android:id="@+id/image"
            android:layout_width="64dp"
            android:layout_height="64dp"
            android:padding="4dp"
            android:src="@drawable/profile" />

        <LinearLayout
            android:id="@+id/text_container"
            android:layout_width="match_parent"
            android:layout_height="wrap_content"
            android:layout_alignParentTop="true"
            android:layout_alignParentEnd="true"
            android:layout_alignParentBottom="true"
            android:layout_toEndOf="@+id/image"
            android:orientation="vertical"
            android:paddingStart="8dp">

            <LinearLayout
                android:layout_width="match_parent"
                android:layout_height="wrap_content"
                android:layout_marginBottom="4dp"
                android:gravity="bottom"
                android:orientation="horizontal">

                <TextView
                    android:id="@+id/id_booking"
                    android:layout_width="119dp"
                    android:layout_height="wrap_content"
                    android:layout_weight="1"
                    android:gravity="start"
                    android:textColor="@color/black"
                    android:textStyle="bold"
                    tools:text="Kode Booking : 1051" />

                <TextView
                    android:id="@+id/tanggal"
                    android:layout_width="0dp"
                    android:layout_height="wrap_content"
                    android:layout_weight="2"
                    android:gravity="end"
                    android:textColor="@color/black"
                    android:textStyle="bold"
                    tools:text="30 September 2017" />

            </LinearLayout>

            <LinearLayout
                android:layout_width="match_parent"
                android:layout_height="wrap_content"
                android:orientation="horizontal">

                <TextView
                    android:id="@+id/riwayat"
                    android:layout_width="match_parent"
                    android:layout_height="wrap_content"
                    android:gravity="start"
                    android:textColor="@color/black"
                    tools:text="Berhasil melakukan pemesanan tiket." />

            </LinearLayout>

            <LinearLayout
                android:layout_width="match_parent"
                android:layout_height="0dp"
                android:layout_weight="1"
                android:orientation="horizontal">

                <TextView
                    android:id="@+id/tv_total"
                    android:layout_width="0dp"
                    android:layout_height="wrap_content"
                    android:layout_weight="1"
                    android:gravity="start"
                    android:textColor="@color/black"
                    android:textStyle="bold"
                    tools:text="Tarif Perjalanan" />

                <TextView
                    android:id="@+id/total"
                    android:layout_width="0dp"
                    android:layout_height="wrap_content"
                    android:layout_weight="2"
                    android:gravity="end"
                    android:textColor="@color/black"
                    android:textStyle="bold"
                    tools:text="Rp. 400.000" />

            </LinearLayout>

        </LinearLayout>

    </RelativeLayout>

</com.google.android.material.card.MaterialCardView>
