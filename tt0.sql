PGDMP                         z            tt0 #   12.9 (Ubuntu 12.9-0ubuntu0.20.04.1) #   12.9 (Ubuntu 12.9-0ubuntu0.20.04.1) �    `           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            a           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            b           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            c           1262    16710    tt0    DATABASE     u   CREATE DATABASE tt0 WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8';
    DROP DATABASE tt0;
                postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
                postgres    false            d           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                   postgres    false    3            7           1247    16712    address_enum    TYPE     S   CREATE TYPE public.address_enum AS ENUM (
    'trading_partner',
    'location'
);
    DROP TYPE public.address_enum;
       public          postgres    false    3            :           1247    16718    enum    TYPE     =   CREATE TYPE public.enum AS ENUM (
    'admin',
    'user'
);
    DROP TYPE public.enum;
       public          postgres    false    3            �           1247    16724    product_enum    TYPE     E   CREATE TYPE public.product_enum AS ENUM (
    'single',
    'box'
);
    DROP TYPE public.product_enum;
       public          postgres    false    3            �           1247    16730 	   role_enum    TYPE     N   CREATE TYPE public.role_enum AS ENUM (
    'read',
    'write',
    'both'
);
    DROP TYPE public.role_enum;
       public          postgres    false    3            �           1247    16738    status_enum    TYPE     M   CREATE TYPE public.status_enum AS ENUM (
    'complete',
    'incomplete'
);
    DROP TYPE public.status_enum;
       public          postgres    false    3            �           1247    16744    transaction_enum    TYPE     L   CREATE TYPE public.transaction_enum AS ENUM (
    'purchase',
    'sale'
);
 #   DROP TYPE public.transaction_enum;
       public          postgres    false    3            �            1259    16749 	   addresses    TABLE       CREATE TABLE public.addresses (
    id integer NOT NULL,
    trading_partner_id integer,
    location_id integer,
    type public.address_enum,
    address_line1 text,
    address_line2 text,
    pincode integer,
    city character varying(255),
    is_delete boolean
);
    DROP TABLE public.addresses;
       public         heap    postgres    false    3    567            �            1259    16755    addresses_id_seq    SEQUENCE     �   CREATE SEQUENCE public.addresses_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.addresses_id_seq;
       public          postgres    false    3    202            e           0    0    addresses_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.addresses_id_seq OWNED BY public.addresses.id;
          public          postgres    false    203            �            1259    16757    compositions    TABLE     �   CREATE TABLE public.compositions (
    id integer NOT NULL,
    product_id integer,
    content_id integer,
    quantity integer,
    is_delete boolean
);
     DROP TABLE public.compositions;
       public         heap    postgres    false    3            �            1259    16760    compositions_id_seq    SEQUENCE     �   CREATE SEQUENCE public.compositions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.compositions_id_seq;
       public          postgres    false    204    3            f           0    0    compositions_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.compositions_id_seq OWNED BY public.compositions.id;
          public          postgres    false    205            �            1259    16762    inbound_shipments    TABLE     �   CREATE TABLE public.inbound_shipments (
    id integer NOT NULL,
    transaction_id integer,
    product_name character varying(50),
    serial_number character varying,
    "timestamp" character varying(50),
    is_delete boolean
);
 %   DROP TABLE public.inbound_shipments;
       public         heap    postgres    false    3            �            1259    16768    inbound_shipments_id_seq    SEQUENCE     �   CREATE SEQUENCE public.inbound_shipments_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.inbound_shipments_id_seq;
       public          postgres    false    206    3            g           0    0    inbound_shipments_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.inbound_shipments_id_seq OWNED BY public.inbound_shipments.id;
          public          postgres    false    207            �            1259    16770    inventories    TABLE     �   CREATE TABLE public.inventories (
    id integer NOT NULL,
    location_id integer,
    storage_area_id integer,
    shelf_id integer,
    product_id integer,
    quantity integer,
    is_delete boolean
);
    DROP TABLE public.inventories;
       public         heap    postgres    false    3            �            1259    16773    inventories_id_seq    SEQUENCE     �   CREATE SEQUENCE public.inventories_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.inventories_id_seq;
       public          postgres    false    208    3            h           0    0    inventories_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.inventories_id_seq OWNED BY public.inventories.id;
          public          postgres    false    209            �            1259    16775 	   locations    TABLE     |   CREATE TABLE public.locations (
    id integer NOT NULL,
    location_name character varying(255),
    is_delete boolean
);
    DROP TABLE public.locations;
       public         heap    postgres    false    3            �            1259    16778    locations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.locations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.locations_id_seq;
       public          postgres    false    3    210            i           0    0    locations_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.locations_id_seq OWNED BY public.locations.id;
          public          postgres    false    211            �            1259    16780    module_management    TABLE     �   CREATE TABLE public.module_management (
    id integer NOT NULL,
    module_name character varying(255),
    is_delete boolean
);
 %   DROP TABLE public.module_management;
       public         heap    postgres    false    3            �            1259    16783    module_management_id_seq    SEQUENCE     �   CREATE SEQUENCE public.module_management_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.module_management_id_seq;
       public          postgres    false    212    3            j           0    0    module_management_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.module_management_id_seq OWNED BY public.module_management.id;
          public          postgres    false    213            �            1259    16785    outbound_shipments    TABLE     �   CREATE TABLE public.outbound_shipments (
    id integer NOT NULL,
    transaction_id integer,
    product_name character varying(50),
    serial_number text,
    "timestamp" character varying(50),
    is_delete boolean
);
 &   DROP TABLE public.outbound_shipments;
       public         heap    postgres    false    3            �            1259    16791    outbound_shipments_id_seq    SEQUENCE     �   CREATE SEQUENCE public.outbound_shipments_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.outbound_shipments_id_seq;
       public          postgres    false    214    3            k           0    0    outbound_shipments_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.outbound_shipments_id_seq OWNED BY public.outbound_shipments.id;
          public          postgres    false    215            �            1259    16793    products    TABLE     �   CREATE TABLE public.products (
    id integer NOT NULL,
    product_name character varying(255),
    description character varying(255),
    quantity integer,
    type public.product_enum,
    is_delete boolean,
    "timestamp" character varying(255)
);
    DROP TABLE public.products;
       public         heap    postgres    false    3    658            �            1259    16799    products_id_seq    SEQUENCE     �   CREATE SEQUENCE public.products_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.products_id_seq;
       public          postgres    false    3    216            l           0    0    products_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;
          public          postgres    false    217            �            1259    16801    role_mapping    TABLE     �   CREATE TABLE public.role_mapping (
    id integer NOT NULL,
    user_id integer,
    module_id integer,
    role_id integer,
    is_delete boolean,
    "timestamp" character varying(255)
);
     DROP TABLE public.role_mapping;
       public         heap    postgres    false    3            �            1259    16804    role_mapping_id_seq    SEQUENCE     �   CREATE SEQUENCE public.role_mapping_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.role_mapping_id_seq;
       public          postgres    false    3    218            m           0    0    role_mapping_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.role_mapping_id_seq OWNED BY public.role_mapping.id;
          public          postgres    false    219            �            1259    16806    roles_management    TABLE     |   CREATE TABLE public.roles_management (
    id integer NOT NULL,
    assign_role public.role_enum,
    is_deleted boolean
);
 $   DROP TABLE public.roles_management;
       public         heap    postgres    false    661    3            �            1259    16809    roles_management_id_seq    SEQUENCE     �   CREATE SEQUENCE public.roles_management_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.roles_management_id_seq;
       public          postgres    false    3    220            n           0    0    roles_management_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.roles_management_id_seq OWNED BY public.roles_management.id;
          public          postgres    false    221            �            1259    16811    storage_areas    TABLE     �   CREATE TABLE public.storage_areas (
    id integer NOT NULL,
    location_id integer,
    storage_area_name character varying(50),
    is_delete boolean
);
 !   DROP TABLE public.storage_areas;
       public         heap    postgres    false    3            �            1259    16814    storage_areas_id_seq    SEQUENCE     �   CREATE SEQUENCE public.storage_areas_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.storage_areas_id_seq;
       public          postgres    false    3    222            o           0    0    storage_areas_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.storage_areas_id_seq OWNED BY public.storage_areas.id;
          public          postgres    false    223            �            1259    16816    storage_shelfs    TABLE     �   CREATE TABLE public.storage_shelfs (
    id integer NOT NULL,
    storage_area_id integer,
    shelf_name character varying(50),
    is_delete boolean
);
 "   DROP TABLE public.storage_shelfs;
       public         heap    postgres    false    3            �            1259    16819    storage_shelfs_id_seq    SEQUENCE     �   CREATE SEQUENCE public.storage_shelfs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.storage_shelfs_id_seq;
       public          postgres    false    3    224            p           0    0    storage_shelfs_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.storage_shelfs_id_seq OWNED BY public.storage_shelfs.id;
          public          postgres    false    225            �            1259    16821    trading_partners    TABLE     !  CREATE TABLE public.trading_partners (
    id integer NOT NULL,
    trading_partner_name character varying(255),
    business_name character varying(255),
    mobile character varying(255),
    email character varying(255),
    is_delete boolean,
    "timestamp" character varying(255)
);
 $   DROP TABLE public.trading_partners;
       public         heap    postgres    false    3            �            1259    16827    trading_partners_id_seq    SEQUENCE     �   CREATE SEQUENCE public.trading_partners_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.trading_partners_id_seq;
       public          postgres    false    226    3            q           0    0    trading_partners_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.trading_partners_id_seq OWNED BY public.trading_partners.id;
          public          postgres    false    227            �            1259    16829    transactions    TABLE       CREATE TABLE public.transactions (
    id integer NOT NULL,
    transaction_type public.transaction_enum,
    trading_partner_id integer,
    status public.status_enum,
    delivery_address text,
    is_delete boolean,
    "timestamp" character varying(255)
);
     DROP TABLE public.transactions;
       public         heap    postgres    false    667    3    664            �            1259    16835    transactions_id_seq    SEQUENCE     �   CREATE SEQUENCE public.transactions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.transactions_id_seq;
       public          postgres    false    228    3            r           0    0    transactions_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.transactions_id_seq OWNED BY public.transactions.id;
          public          postgres    false    229            �            1259    16837    transactions_lines_items    TABLE     �   CREATE TABLE public.transactions_lines_items (
    id integer NOT NULL,
    transaction_id integer,
    product_id integer,
    order_quantity integer,
    order_quantity_left integer,
    is_delete boolean,
    "timestamp" character varying(255)
);
 ,   DROP TABLE public.transactions_lines_items;
       public         heap    postgres    false    3            �            1259    16840    transactions_lines_items_id_seq    SEQUENCE     �   CREATE SEQUENCE public.transactions_lines_items_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.transactions_lines_items_id_seq;
       public          postgres    false    230    3            s           0    0    transactions_lines_items_id_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.transactions_lines_items_id_seq OWNED BY public.transactions_lines_items.id;
          public          postgres    false    231            �            1259    16842    users    TABLE     �   CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(255),
    email character varying(255),
    password character varying(255),
    user_type public.enum,
    is_delete boolean,
    "timestamp" character varying(255)
);
    DROP TABLE public.users;
       public         heap    postgres    false    570    3            �            1259    16848    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    232    3            t           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    233            �           2604    16850    addresses id    DEFAULT     l   ALTER TABLE ONLY public.addresses ALTER COLUMN id SET DEFAULT nextval('public.addresses_id_seq'::regclass);
 ;   ALTER TABLE public.addresses ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202            �           2604    16851    compositions id    DEFAULT     r   ALTER TABLE ONLY public.compositions ALTER COLUMN id SET DEFAULT nextval('public.compositions_id_seq'::regclass);
 >   ALTER TABLE public.compositions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    205    204            �           2604    16852    inbound_shipments id    DEFAULT     |   ALTER TABLE ONLY public.inbound_shipments ALTER COLUMN id SET DEFAULT nextval('public.inbound_shipments_id_seq'::regclass);
 C   ALTER TABLE public.inbound_shipments ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    207    206            �           2604    16853    inventories id    DEFAULT     p   ALTER TABLE ONLY public.inventories ALTER COLUMN id SET DEFAULT nextval('public.inventories_id_seq'::regclass);
 =   ALTER TABLE public.inventories ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    208            �           2604    16854    locations id    DEFAULT     l   ALTER TABLE ONLY public.locations ALTER COLUMN id SET DEFAULT nextval('public.locations_id_seq'::regclass);
 ;   ALTER TABLE public.locations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    210            �           2604    16855    module_management id    DEFAULT     |   ALTER TABLE ONLY public.module_management ALTER COLUMN id SET DEFAULT nextval('public.module_management_id_seq'::regclass);
 C   ALTER TABLE public.module_management ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    213    212            �           2604    16856    outbound_shipments id    DEFAULT     ~   ALTER TABLE ONLY public.outbound_shipments ALTER COLUMN id SET DEFAULT nextval('public.outbound_shipments_id_seq'::regclass);
 D   ALTER TABLE public.outbound_shipments ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214            �           2604    16857    products id    DEFAULT     j   ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);
 :   ALTER TABLE public.products ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    216            �           2604    16858    role_mapping id    DEFAULT     r   ALTER TABLE ONLY public.role_mapping ALTER COLUMN id SET DEFAULT nextval('public.role_mapping_id_seq'::regclass);
 >   ALTER TABLE public.role_mapping ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218            �           2604    16859    roles_management id    DEFAULT     z   ALTER TABLE ONLY public.roles_management ALTER COLUMN id SET DEFAULT nextval('public.roles_management_id_seq'::regclass);
 B   ALTER TABLE public.roles_management ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    220            �           2604    16860    storage_areas id    DEFAULT     t   ALTER TABLE ONLY public.storage_areas ALTER COLUMN id SET DEFAULT nextval('public.storage_areas_id_seq'::regclass);
 ?   ALTER TABLE public.storage_areas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222            �           2604    16861    storage_shelfs id    DEFAULT     v   ALTER TABLE ONLY public.storage_shelfs ALTER COLUMN id SET DEFAULT nextval('public.storage_shelfs_id_seq'::regclass);
 @   ALTER TABLE public.storage_shelfs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224            �           2604    16862    trading_partners id    DEFAULT     z   ALTER TABLE ONLY public.trading_partners ALTER COLUMN id SET DEFAULT nextval('public.trading_partners_id_seq'::regclass);
 B   ALTER TABLE public.trading_partners ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226            �           2604    16863    transactions id    DEFAULT     r   ALTER TABLE ONLY public.transactions ALTER COLUMN id SET DEFAULT nextval('public.transactions_id_seq'::regclass);
 >   ALTER TABLE public.transactions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    228            �           2604    16864    transactions_lines_items id    DEFAULT     �   ALTER TABLE ONLY public.transactions_lines_items ALTER COLUMN id SET DEFAULT nextval('public.transactions_lines_items_id_seq'::regclass);
 J   ALTER TABLE public.transactions_lines_items ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    231    230            �           2604    16865    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    232            >          0    16749 	   addresses 
   TABLE DATA           �   COPY public.addresses (id, trading_partner_id, location_id, type, address_line1, address_line2, pincode, city, is_delete) FROM stdin;
    public          postgres    false    202    �       @          0    16757    compositions 
   TABLE DATA           W   COPY public.compositions (id, product_id, content_id, quantity, is_delete) FROM stdin;
    public          postgres    false    204   =�       B          0    16762    inbound_shipments 
   TABLE DATA           t   COPY public.inbound_shipments (id, transaction_id, product_name, serial_number, "timestamp", is_delete) FROM stdin;
    public          postgres    false    206   Z�       D          0    16770    inventories 
   TABLE DATA           r   COPY public.inventories (id, location_id, storage_area_id, shelf_id, product_id, quantity, is_delete) FROM stdin;
    public          postgres    false    208   ��       F          0    16775 	   locations 
   TABLE DATA           A   COPY public.locations (id, location_name, is_delete) FROM stdin;
    public          postgres    false    210   �       H          0    16780    module_management 
   TABLE DATA           G   COPY public.module_management (id, module_name, is_delete) FROM stdin;
    public          postgres    false    212   4�       J          0    16785    outbound_shipments 
   TABLE DATA           u   COPY public.outbound_shipments (id, transaction_id, product_name, serial_number, "timestamp", is_delete) FROM stdin;
    public          postgres    false    214   Q�       L          0    16793    products 
   TABLE DATA           i   COPY public.products (id, product_name, description, quantity, type, is_delete, "timestamp") FROM stdin;
    public          postgres    false    216   n�       N          0    16801    role_mapping 
   TABLE DATA           _   COPY public.role_mapping (id, user_id, module_id, role_id, is_delete, "timestamp") FROM stdin;
    public          postgres    false    218   ��       P          0    16806    roles_management 
   TABLE DATA           G   COPY public.roles_management (id, assign_role, is_deleted) FROM stdin;
    public          postgres    false    220   ��       R          0    16811    storage_areas 
   TABLE DATA           V   COPY public.storage_areas (id, location_id, storage_area_name, is_delete) FROM stdin;
    public          postgres    false    222   Ũ       T          0    16816    storage_shelfs 
   TABLE DATA           T   COPY public.storage_shelfs (id, storage_area_id, shelf_name, is_delete) FROM stdin;
    public          postgres    false    224   �       V          0    16821    trading_partners 
   TABLE DATA           z   COPY public.trading_partners (id, trading_partner_name, business_name, mobile, email, is_delete, "timestamp") FROM stdin;
    public          postgres    false    226   ��       X          0    16829    transactions 
   TABLE DATA           �   COPY public.transactions (id, transaction_type, trading_partner_id, status, delivery_address, is_delete, "timestamp") FROM stdin;
    public          postgres    false    228   S�       Z          0    16837    transactions_lines_items 
   TABLE DATA           �   COPY public.transactions_lines_items (id, transaction_id, product_id, order_quantity, order_quantity_left, is_delete, "timestamp") FROM stdin;
    public          postgres    false    230   ��       \          0    16842    users 
   TABLE DATA           ]   COPY public.users (id, name, email, password, user_type, is_delete, "timestamp") FROM stdin;
    public          postgres    false    232   ��       u           0    0    addresses_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.addresses_id_seq', 1, false);
          public          postgres    false    203            v           0    0    compositions_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.compositions_id_seq', 1, false);
          public          postgres    false    205            w           0    0    inbound_shipments_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.inbound_shipments_id_seq', 8, true);
          public          postgres    false    207            x           0    0    inventories_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.inventories_id_seq', 1, false);
          public          postgres    false    209            y           0    0    locations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.locations_id_seq', 1, false);
          public          postgres    false    211            z           0    0    module_management_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.module_management_id_seq', 1, false);
          public          postgres    false    213            {           0    0    outbound_shipments_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.outbound_shipments_id_seq', 1, false);
          public          postgres    false    215            |           0    0    products_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.products_id_seq', 1, false);
          public          postgres    false    217            }           0    0    role_mapping_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.role_mapping_id_seq', 1, false);
          public          postgres    false    219            ~           0    0    roles_management_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.roles_management_id_seq', 1, false);
          public          postgres    false    221                       0    0    storage_areas_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.storage_areas_id_seq', 1, false);
          public          postgres    false    223            �           0    0    storage_shelfs_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.storage_shelfs_id_seq', 1, false);
          public          postgres    false    225            �           0    0    trading_partners_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.trading_partners_id_seq', 1, true);
          public          postgres    false    227            �           0    0    transactions_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.transactions_id_seq', 1, true);
          public          postgres    false    229            �           0    0    transactions_lines_items_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.transactions_lines_items_id_seq', 1, false);
          public          postgres    false    231            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    233            �           2606    16867    addresses addresses_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.addresses
    ADD CONSTRAINT addresses_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.addresses DROP CONSTRAINT addresses_pkey;
       public            postgres    false    202            �           2606    16869    compositions compositions_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.compositions
    ADD CONSTRAINT compositions_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.compositions DROP CONSTRAINT compositions_pkey;
       public            postgres    false    204            �           2606    16871 (   inbound_shipments inbound_shipments_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.inbound_shipments
    ADD CONSTRAINT inbound_shipments_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.inbound_shipments DROP CONSTRAINT inbound_shipments_pkey;
       public            postgres    false    206            �           2606    16873    inventories inventories_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.inventories
    ADD CONSTRAINT inventories_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.inventories DROP CONSTRAINT inventories_pkey;
       public            postgres    false    208            �           2606    16875    locations locations_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.locations
    ADD CONSTRAINT locations_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.locations DROP CONSTRAINT locations_pkey;
       public            postgres    false    210            �           2606    16877 (   module_management module_management_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.module_management
    ADD CONSTRAINT module_management_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.module_management DROP CONSTRAINT module_management_pkey;
       public            postgres    false    212            �           2606    16879 *   outbound_shipments outbound_shipments_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.outbound_shipments
    ADD CONSTRAINT outbound_shipments_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.outbound_shipments DROP CONSTRAINT outbound_shipments_pkey;
       public            postgres    false    214            �           2606    16881    products products_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.products DROP CONSTRAINT products_pkey;
       public            postgres    false    216            �           2606    16883    role_mapping role_mapping_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.role_mapping
    ADD CONSTRAINT role_mapping_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.role_mapping DROP CONSTRAINT role_mapping_pkey;
       public            postgres    false    218            �           2606    16885 &   roles_management roles_management_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.roles_management
    ADD CONSTRAINT roles_management_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.roles_management DROP CONSTRAINT roles_management_pkey;
       public            postgres    false    220            �           2606    16887     storage_areas storage_areas_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.storage_areas
    ADD CONSTRAINT storage_areas_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.storage_areas DROP CONSTRAINT storage_areas_pkey;
       public            postgres    false    222            �           2606    16889 "   storage_shelfs storage_shelfs_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.storage_shelfs
    ADD CONSTRAINT storage_shelfs_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.storage_shelfs DROP CONSTRAINT storage_shelfs_pkey;
       public            postgres    false    224            �           2606    16891 &   trading_partners trading_partners_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.trading_partners
    ADD CONSTRAINT trading_partners_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.trading_partners DROP CONSTRAINT trading_partners_pkey;
       public            postgres    false    226            �           2606    16893 6   transactions_lines_items transactions_lines_items_pkey 
   CONSTRAINT     t   ALTER TABLE ONLY public.transactions_lines_items
    ADD CONSTRAINT transactions_lines_items_pkey PRIMARY KEY (id);
 `   ALTER TABLE ONLY public.transactions_lines_items DROP CONSTRAINT transactions_lines_items_pkey;
       public            postgres    false    230            �           2606    16895    transactions transactions_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.transactions
    ADD CONSTRAINT transactions_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.transactions DROP CONSTRAINT transactions_pkey;
       public            postgres    false    228            �           2606    16897    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    232            �           2606    16898 "   addresses fk_addresses_location_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.addresses
    ADD CONSTRAINT fk_addresses_location_id FOREIGN KEY (location_id) REFERENCES public.locations(id);
 L   ALTER TABLE ONLY public.addresses DROP CONSTRAINT fk_addresses_location_id;
       public          postgres    false    210    2970    202            �           2606    16903 )   addresses fk_addresses_trading_partner_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.addresses
    ADD CONSTRAINT fk_addresses_trading_partner_id FOREIGN KEY (trading_partner_id) REFERENCES public.trading_partners(id);
 S   ALTER TABLE ONLY public.addresses DROP CONSTRAINT fk_addresses_trading_partner_id;
       public          postgres    false    226    202    2986            �           2606    16908 '   compositions fk_compositions_product_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.compositions
    ADD CONSTRAINT fk_compositions_product_id FOREIGN KEY (product_id) REFERENCES public.products(id);
 Q   ALTER TABLE ONLY public.compositions DROP CONSTRAINT fk_compositions_product_id;
       public          postgres    false    2976    204    216            �           2606    16913 5   inbound_shipments fk_inbound_shipments_transaction_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.inbound_shipments
    ADD CONSTRAINT fk_inbound_shipments_transaction_id FOREIGN KEY (transaction_id) REFERENCES public.transactions(id);
 _   ALTER TABLE ONLY public.inbound_shipments DROP CONSTRAINT fk_inbound_shipments_transaction_id;
       public          postgres    false    206    2988    228            �           2606    16918 &   inventories fk_inventories_location_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.inventories
    ADD CONSTRAINT fk_inventories_location_id FOREIGN KEY (location_id) REFERENCES public.locations(id);
 P   ALTER TABLE ONLY public.inventories DROP CONSTRAINT fk_inventories_location_id;
       public          postgres    false    210    208    2970            �           2606    16923 %   inventories fk_inventories_product_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.inventories
    ADD CONSTRAINT fk_inventories_product_id FOREIGN KEY (product_id) REFERENCES public.products(id);
 O   ALTER TABLE ONLY public.inventories DROP CONSTRAINT fk_inventories_product_id;
       public          postgres    false    2976    216    208            �           2606    16928 #   inventories fk_inventories_shelf_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.inventories
    ADD CONSTRAINT fk_inventories_shelf_id FOREIGN KEY (shelf_id) REFERENCES public.storage_shelfs(id);
 M   ALTER TABLE ONLY public.inventories DROP CONSTRAINT fk_inventories_shelf_id;
       public          postgres    false    208    2984    224            �           2606    16933 /   transactions fk_itransaction_trading_partner_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.transactions
    ADD CONSTRAINT fk_itransaction_trading_partner_id FOREIGN KEY (trading_partner_id) REFERENCES public.trading_partners(id);
 Y   ALTER TABLE ONLY public.transactions DROP CONSTRAINT fk_itransaction_trading_partner_id;
       public          postgres    false    228    2986    226            �           2606    16938 7   outbound_shipments fk_outbound_shipments_transaction_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.outbound_shipments
    ADD CONSTRAINT fk_outbound_shipments_transaction_id FOREIGN KEY (transaction_id) REFERENCES public.transactions(id);
 a   ALTER TABLE ONLY public.outbound_shipments DROP CONSTRAINT fk_outbound_shipments_transaction_id;
       public          postgres    false    2988    228    214            �           2606    16943 &   role_mapping fk_role_mapping_module_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_mapping
    ADD CONSTRAINT fk_role_mapping_module_id FOREIGN KEY (module_id) REFERENCES public.module_management(id);
 P   ALTER TABLE ONLY public.role_mapping DROP CONSTRAINT fk_role_mapping_module_id;
       public          postgres    false    212    218    2972            �           2606    16948 $   role_mapping fk_role_mapping_role_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_mapping
    ADD CONSTRAINT fk_role_mapping_role_id FOREIGN KEY (role_id) REFERENCES public.roles_management(id);
 N   ALTER TABLE ONLY public.role_mapping DROP CONSTRAINT fk_role_mapping_role_id;
       public          postgres    false    2980    218    220            �           2606    16953 $   role_mapping fk_role_mapping_user_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_mapping
    ADD CONSTRAINT fk_role_mapping_user_id FOREIGN KEY (user_id) REFERENCES public.users(id);
 N   ALTER TABLE ONLY public.role_mapping DROP CONSTRAINT fk_role_mapping_user_id;
       public          postgres    false    218    232    2992            �           2606    16958 *   storage_areas fk_storage_areas_location_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.storage_areas
    ADD CONSTRAINT fk_storage_areas_location_id FOREIGN KEY (location_id) REFERENCES public.locations(id);
 T   ALTER TABLE ONLY public.storage_areas DROP CONSTRAINT fk_storage_areas_location_id;
       public          postgres    false    210    2970    222            �           2606    16963 >   transactions_lines_items fk_transaction_lines_items_product_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.transactions_lines_items
    ADD CONSTRAINT fk_transaction_lines_items_product_id FOREIGN KEY (product_id) REFERENCES public.products(id);
 h   ALTER TABLE ONLY public.transactions_lines_items DROP CONSTRAINT fk_transaction_lines_items_product_id;
       public          postgres    false    2976    216    230            �           2606    16968 B   transactions_lines_items fk_transaction_lines_items_transaction_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.transactions_lines_items
    ADD CONSTRAINT fk_transaction_lines_items_transaction_id FOREIGN KEY (transaction_id) REFERENCES public.transactions(id);
 l   ALTER TABLE ONLY public.transactions_lines_items DROP CONSTRAINT fk_transaction_lines_items_transaction_id;
       public          postgres    false    230    2988    228            >      x������ � �      @      x������ � �      B   �   x�E�;�0E�z����S�@�834A �������y���ѵm��F·�)�j)9R㡷6Z�O{�I!�bfR	�ld<Y~�'�\,8���W�;O��a���P�OOd����u�!��29�
�;yv���b�t�c��2V      D      x������ � �      F      x������ � �      H      x������ � �      J      x������ � �      L      x������ � �      N      x������ � �      P      x������ � �      R      x������ � �      T      x������ � �      V   D   x�3�t�,�I��
e%
>���%�)��F�ff�&�� I��������\�4NC#cS3�=... �>�      X   6   x�3�,(-J�H,N�4�L��-�I-I�����N,I�L�4426153������� U,�      Z      x������ � �      \      x������ � �     