
create table deceased_horses(name VARCHAR(50), breed VARCHAR(30), gender VARCHAR(30), dob DATE, UKYCase INT, RRCase INT PRIMARY KEY, trained VARCHAR(30), raceOutsideUSA VARCHAR(30), ageFirstRace DOUBLE);

create table living_horses(name VARCHAR(50), breed VARCHAR(30), gender VARCHAR(30), dob DATE, UKYCase INT PRIMARY KEY, trained VARCHAR(30), raceOutsideUSA VARCHAR(30), ageFirstRace DOUBLE);

create table examined_hindlimb(deceased_horse_RRCase INT NOT NULL, hindlimb_RRCase INT NOT NULL,

  FOREIGN KEY (deceased_horse_RRCase)
      REFERENCES deceased_horses(RRCase),
  FOREIGN KEY (hindlimb_RRCase)
      REFERENCES hindlimb(RRCase)
);

create table hindlimb(RRCase INT NOT NULL, date_of_euthansia DATE, leg VARCHAR(30), density_included VARCHAR(10), distal_tibia VARCHAR(10), distal_tibia_dorsomedial VARCHAR(30), distal_tibia_dorsolateral VARCHAR(30), distal_tibia_palmar VARCHAR(30), central_tarsal VARCHAR(30), central_tarsal_dorsal VARCHAR(30), central_tarsal_plantar VARCHAR(30), central_tarsal_proximal VARCHAR(30), central_tarsal_distal VARCHAR(30), metatarsal_3 VARCHAR(30), metatarsal_3_proximal VARCHAR(30), metatarsal_3_proximal_dorsal VARCHAR(30), metatarsal_3_proximal_palmar VARCHAR(30), metatarsal_3_diaphysis VARCHAR(30), metatarsal_3_diaphysis_dorsal VARCHAR(30), metatarsal_3_diaphysis_palmar VARCHAR(30), metatarsal_3_distal VARCHAR(30), metatarsal_3_distal_dorsal_medial VARCHAR(30), metatarsal_3_distal_dorsal_lateral VARCHAR(30), metatarsal_3_distal_dorsal_sagittal_ridge VARCHAR(30), metatarsal_3_distal_palmar_medial VARCHAR(30), metatarsal_3_distal_palmar_lateral VARCHAR(30), metatarsal_3_distal_palmar_sagittal_ridge VARCHAR(30), medial_sesamoid VARCHAR(30), medial_sesamoid_apical_articular VARCHAR(30), medial_sesamoid_apical_non_Articular VARCHAR(30), medial_sesamoid_midbody_articular VARCHAR(30), medial_sesamoid_midbody_non_articular VARCHAR(30), medial_sesamoid_base_articular VARCHAR(30), medial_sesamoid_base_non_articular VARCHAR(30), medial_sesamoid_axial_articular VARCHAR(30), medial_sesamoid_axial_non_articular VARCHAR(30),
  FOREIGN KEY (RRCase)
    REFERENCES deceased_horses(RRCase)
);

create table forelimb(RRCase INT NOT NULL, date_of_euthansia DATE, leg VARCHAR(30), density_included VARCHAR(30), distal_radius VARCHAR(30), distal_radius_dorsomedial VARCHAR(30), distal_radius_dorsolateral VARCHAR(30), distal_radius_palmar VARCHAR(30), radiocarpal_bone VARCHAR(30), radiocarpal_bone_proximal_medial VARCHAR(30), radiocarpal_bone_proximal_lateral VARCHAR(30), radiocarpal_bone_distal_medial VARCHAR(30), radiocarpal_bone_distal_lateral VARCHAR(30), metacarpal_3 VARCHAR(30), metacarpal_3_proximal VARCHAR(30), metacarpal_3_proximal_dorsal VARCHAR(30), metacarpal_3_proximal_palmar VARCHAR(30), metacarpal_3_diaphysis VARCHAR(30), metacarpal_3_diaphysis_dorsal VARCHAR(30), metacarpal_3_diaphysis_palmar VARCHAR(30), metacarpal_3_distal VARCHAR(30), metacarpal_3_distal_dorsal_medial VARCHAR(30), metacarpal_3_distal_dorsal_lateral VARCHAR(30), metacarpal_3_distal_dorsal_sagittal_ridge VARCHAR(30), metacarpal_3_distal_palmar_medial VARCHAR(30), metacarpal_3_distal_palmar_lateral VARCHAR(30), metacarpal_3_distal_palmar_sagittal_ridge VARCHAR(30), medial_sesamoid VARCHAR(30), medial_sesamoid_apical_articular VARCHAR(30), medial_sesamoid_apical_non_articular VARCHAR(30), medial_sesamoid_midbody_articular VARCHAR(30), medial_sesamoid_base_articular VARCHAR(30), medial_sesamoid_base_non_articular VARCHAR(30), medial_sesamoid_axial_articular VARCHAR(30), medial_sesamoid_axial_non_articular VARCHAR(30),
  FOREIGN KEY (RRCase)
    REFERENCES deceased_horses(RRCase)
);
