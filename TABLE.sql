CREATE TABLE agro
(
	id		serial   		 primary key,
	x_axis		character varying(150)		NULL,
	y_axis		character varying(150)		NULL,
	z_axis		character carying(150)		NULL,
	max_temp	float				NULL,
	min_temp	float				NULL, 
	g_umdi		float				NULL,
	a_umid 		float			        NULL,
	sun_h		timestamp			NULL,
	sun_i		float				NULL,
	h_dif		float				NULL,
	rain		float				NULL,
	dt		date				NULL,
	disaster	character varying(150)		NULL,
	t_disaster	character varying(150)		NULL,
	d_disaster	date				NULL,
	planting_d	date				NULL,
	harvest_d	date				NULL,
	hec_harv	float				NULL,
	region_climate	character varying(200}		NULL
);
		
