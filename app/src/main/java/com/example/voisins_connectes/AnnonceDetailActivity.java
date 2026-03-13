package com.example.voisins_connectes;

import android.os.Bundle;
import android.widget.ImageView;
import android.widget.TextView;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import com.google.android.material.chip.Chip;

public class AnnonceDetailActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_annonce_detail);

        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        if (getSupportActionBar() != null) {
            getSupportActionBar().setDisplayHomeAsUpEnabled(true);
            getSupportActionBar().setTitle("");
        }
        toolbar.setNavigationOnClickListener(v -> onBackPressed());

        // Récupération de l'annonce passée en paramètre
        Annonce annonce = (Annonce) getIntent().getSerializableExtra("annonce");

        if (annonce != null) {
            populateDetails(annonce);
        }
    }

    private void populateDetails(Annonce annonce) {
        TextView tvTitre = findViewById(R.id.tv_detail_titre);
        TextView tvDescription = findViewById(R.id.tv_detail_description);
        TextView tvPrix = findViewById(R.id.tv_detail_prix);
        TextView tvLocation = findViewById(R.id.tv_detail_location);
        TextView tvDuree = findViewById(R.id.tv_detail_duree);
        Chip chipCategorie = findViewById(R.id.chip_detail_categorie);
        TextView tvRating = findViewById(R.id.tv_detail_rating);
        TextView tvUserName = findViewById(R.id.tv_user_name);
        TextView tvUserStats = findViewById(R.id.tv_user_stats);
        ImageView ivHeader = findViewById(R.id.iv_annonce_header);

        tvTitre.setText(annonce.getTitre());
        tvDescription.setText(annonce.getDescription());
        tvPrix.setText(String.format("%.2f €", annonce.getPrix()));
        tvLocation.setText("📍 " + annonce.getLocalisation());
        tvDuree.setText("🕒 " + annonce.getDuree());
        chipCategorie.setText(annonce.getCategorie());
        tvRating.setText(String.format("★ %.1f", annonce.getUserRating()));
        tvUserName.setText(annonce.getUserName());
        tvUserStats.setText(String.format("★ %.1f (31 avis)", annonce.getUserRating()));

        // Définir l'image selon la catégorie
        if ("Jardinage".equalsIgnoreCase(annonce.getCategorie())) {
            ivHeader.setImageResource(R.drawable.jardinage);
        } else if ("Bricolage".equalsIgnoreCase(annonce.getCategorie())) {
            ivHeader.setImageResource(R.drawable.bricolage);
        } else if ("Cours".equalsIgnoreCase(annonce.getCategorie())) {
            ivHeader.setImageResource(R.drawable.cours);
        }
    }
}