--
-- PostgreSQL database dump
--

-- Dumped from database version 12.4
-- Dumped by pg_dump version 12.2

-- Started on 2020-09-09 12:14:32 CDT

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 208 (class 1259 OID 25314)
-- Name: acceder; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.acceder (
    no_boleta character varying(50) NOT NULL,
    email_tutor character varying(100) NOT NULL,
    user_tutor character varying(50) NOT NULL
);


ALTER TABLE public.acceder OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 25395)
-- Name: aplicar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.aplicar (
    email_profesor character varying(100) NOT NULL,
    user_profesor character varying(50) NOT NULL,
    nombre_examen character varying(50) NOT NULL,
    nombre_materia character varying(200) NOT NULL,
    no_unidad integer NOT NULL
);


ALTER TABLE public.aplicar OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 25239)
-- Name: boleta; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.boleta (
    no_boleta character varying NOT NULL
);


ALTER TABLE public.boleta OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 25255)
-- Name: c_alumno; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.c_alumno (
    email_alumno character varying(100) NOT NULL,
    user_alumno character varying(50) NOT NULL,
    grado integer NOT NULL,
    password character varying(50) NOT NULL,
    descripcion character varying(100)
);


ALTER TABLE public.c_alumno OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 25247)
-- Name: c_profesor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.c_profesor (
    email_profesor character varying(100) NOT NULL,
    user_profesor character varying(50) NOT NULL,
    password character varying(50) NOT NULL,
    descripcion character varying(500)
);


ALTER TABLE public.c_profesor OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 25260)
-- Name: c_tutor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.c_tutor (
    email_tutor character varying(100) NOT NULL,
    user_tutor character varying(50) NOT NULL,
    password character varying(50) NOT NULL,
    descripcion character varying(500),
    user_profesor character varying(50) NOT NULL,
    email_profesor character varying(100) NOT NULL
);


ALTER TABLE public.c_tutor OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 25329)
-- Name: calcification; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.calcification (
    materia character varying(100) NOT NULL,
    unidad integer NOT NULL,
    tipo_evaluacion character varying(50) NOT NULL,
    no_actividad integer NOT NULL,
    no_boleta character varying(50) NOT NULL,
    puntuacion integer
);


ALTER TABLE public.calcification OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 25468)
-- Name: comentario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.comentario (
    no_comentario integer NOT NULL,
    no_foro integer NOT NULL,
    fecha date NOT NULL,
    comentario character varying(1000) NOT NULL
);


ALTER TABLE public.comentario OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 25274)
-- Name: enlazar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.enlazar (
    email_tutor character varying(100) NOT NULL,
    user_tutor character varying(50) NOT NULL,
    email_alumno character varying(100) NOT NULL,
    user_alumno character varying(50) NOT NULL
);


ALTER TABLE public.enlazar OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 25535)
-- Name: entregar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.entregar (
    email_alumno character varying(100) NOT NULL,
    user_alumno character varying(50) NOT NULL,
    nombre_materia character varying(200) NOT NULL,
    no_unidad integer NOT NULL,
    nombre_tema character varying(200) NOT NULL,
    no_material integer NOT NULL,
    puntaje integer,
    archivo boolean,
    fecha_entrega date NOT NULL
);


ALTER TABLE public.entregar OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 25387)
-- Name: examen; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.examen (
    nombre_examen character varying NOT NULL,
    fecha_entrega date
);


ALTER TABLE public.examen OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 25458)
-- Name: foro; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.foro (
    no_foro integer NOT NULL,
    email_profesor character varying(100) NOT NULL,
    user_profesor character varying(50) NOT NULL
);


ALTER TABLE public.foro OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 25347)
-- Name: impartir; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.impartir (
    email_profesor character varying(100) NOT NULL,
    user_profesor character varying(50) NOT NULL,
    nombre_materia character varying(200) NOT NULL
);


ALTER TABLE public.impartir OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 25362)
-- Name: inscribir; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.inscribir (
    email_alumno character varying(100) NOT NULL,
    user_alumno character varying(50) NOT NULL,
    nombre_materia character varying(200) NOT NULL
);


ALTER TABLE public.inscribir OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 25339)
-- Name: materia; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.materia (
    nombre_materia character varying(200) NOT NULL,
    descripcion character varying(1000)
);


ALTER TABLE public.materia OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 25544)
-- Name: material; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.material (
    nombre_materia character varying(200) NOT NULL,
    no_unidad integer NOT NULL,
    nombre_tema character varying(200) NOT NULL,
    no_material integer NOT NULL,
    instrucciones character varying(1000),
    fecha date NOT NULL,
    limite_entrega date NOT NULL,
    tipo character varying(50)
);


ALTER TABLE public.material OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 25481)
-- Name: participar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.participar (
    email_alumno character varying(100) NOT NULL,
    user_alumno character varying(50) NOT NULL,
    no_foro integer NOT NULL
);


ALTER TABLE public.participar OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 25572)
-- Name: poseer; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.poseer (
    nombre_materia character varying(200) NOT NULL,
    no_unidad integer NOT NULL,
    nombre_tema character varying(200) NOT NULL,
    no_material integer NOT NULL,
    no_foro integer NOT NULL
);


ALTER TABLE public.poseer OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 25415)
-- Name: presentar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.presentar (
    nombre_examen character varying(50) NOT NULL,
    email_alumno character varying(100) NOT NULL,
    user_alumno character varying(50) NOT NULL,
    puntaje integer
);


ALTER TABLE public.presentar OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 25509)
-- Name: recurso; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.recurso (
    id_recurso integer NOT NULL,
    descripcion character varying(1000),
    archivo boolean,
    nombre_materia character varying(200) NOT NULL,
    no_unidad integer NOT NULL,
    nombre_tema character varying(200) NOT NULL,
    no_material integer NOT NULL
);


ALTER TABLE public.recurso OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 25517)
-- Name: subir; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.subir (
    email_profesor character varying(100) NOT NULL,
    user_profesor character varying(50) NOT NULL,
    nombre_materia character varying(200) NOT NULL,
    no_unidad integer NOT NULL,
    nombre_tema character varying(200) NOT NULL,
    no_material integer NOT NULL
);


ALTER TABLE public.subir OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 25430)
-- Name: tema; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tema (
    nombre_materia character varying(200) NOT NULL,
    no_unidad integer NOT NULL,
    nombre_tema character varying(200) NOT NULL
);


ALTER TABLE public.tema OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 25299)
-- Name: tener; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tener (
    email_alumno character varying(100) NOT NULL,
    user_alumno character varying(50) NOT NULL,
    no_boleta character varying(50) NOT NULL
);


ALTER TABLE public.tener OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 25377)
-- Name: unidad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.unidad (
    nombre_materia character varying(200) NOT NULL,
    no_unidad integer NOT NULL,
    titulo character varying(200)
);


ALTER TABLE public.unidad OWNER TO postgres;

--
-- TOC entry 3202 (class 2606 OID 25318)
-- Name: acceder acceder_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.acceder
    ADD CONSTRAINT acceder_pkey PRIMARY KEY (no_boleta, email_tutor, user_tutor);


--
-- TOC entry 3216 (class 2606 OID 25399)
-- Name: aplicar aplicar_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.aplicar
    ADD CONSTRAINT aplicar_pkey PRIMARY KEY (email_profesor, user_profesor, nombre_examen, nombre_materia, no_unidad);


--
-- TOC entry 3190 (class 2606 OID 25246)
-- Name: boleta boleta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.boleta
    ADD CONSTRAINT boleta_pkey PRIMARY KEY (no_boleta);


--
-- TOC entry 3194 (class 2606 OID 25259)
-- Name: c_alumno c_alumno_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.c_alumno
    ADD CONSTRAINT c_alumno_pkey PRIMARY KEY (email_alumno, user_alumno);


--
-- TOC entry 3192 (class 2606 OID 25254)
-- Name: c_profesor c_profesor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.c_profesor
    ADD CONSTRAINT c_profesor_pkey PRIMARY KEY (email_profesor, user_profesor);


--
-- TOC entry 3196 (class 2606 OID 25267)
-- Name: c_tutor c_tutor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.c_tutor
    ADD CONSTRAINT c_tutor_pkey PRIMARY KEY (email_tutor, user_tutor);


--
-- TOC entry 3204 (class 2606 OID 25333)
-- Name: calcification calcification_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.calcification
    ADD CONSTRAINT calcification_pkey PRIMARY KEY (materia, unidad, tipo_evaluacion, no_actividad);


--
-- TOC entry 3224 (class 2606 OID 25475)
-- Name: comentario comentario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comentario
    ADD CONSTRAINT comentario_pkey PRIMARY KEY (no_comentario, no_foro);


--
-- TOC entry 3198 (class 2606 OID 25278)
-- Name: enlazar enlazar_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.enlazar
    ADD CONSTRAINT enlazar_pkey PRIMARY KEY (email_tutor, user_tutor, email_alumno, user_alumno);


--
-- TOC entry 3232 (class 2606 OID 25542)
-- Name: entregar entregar_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.entregar
    ADD CONSTRAINT entregar_pkey PRIMARY KEY (email_alumno, user_alumno, nombre_materia, no_unidad, nombre_tema, no_material);


--
-- TOC entry 3214 (class 2606 OID 25394)
-- Name: examen examen_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.examen
    ADD CONSTRAINT examen_pkey PRIMARY KEY (nombre_examen);


--
-- TOC entry 3222 (class 2606 OID 25462)
-- Name: foro foro_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.foro
    ADD CONSTRAINT foro_pkey PRIMARY KEY (no_foro);


--
-- TOC entry 3208 (class 2606 OID 25351)
-- Name: impartir impartir_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.impartir
    ADD CONSTRAINT impartir_pkey PRIMARY KEY (email_profesor, user_profesor, nombre_materia);


--
-- TOC entry 3210 (class 2606 OID 25366)
-- Name: inscribir inscribir_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.inscribir
    ADD CONSTRAINT inscribir_pkey PRIMARY KEY (email_alumno, user_alumno, nombre_materia);


--
-- TOC entry 3206 (class 2606 OID 25346)
-- Name: materia materia_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.materia
    ADD CONSTRAINT materia_pkey PRIMARY KEY (nombre_materia);


--
-- TOC entry 3234 (class 2606 OID 25551)
-- Name: material material_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.material
    ADD CONSTRAINT material_pkey PRIMARY KEY (nombre_materia, no_unidad, nombre_tema, no_material);


--
-- TOC entry 3226 (class 2606 OID 25485)
-- Name: participar participar_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.participar
    ADD CONSTRAINT participar_pkey PRIMARY KEY (email_alumno, user_alumno, no_foro);


--
-- TOC entry 3236 (class 2606 OID 25576)
-- Name: poseer poseer_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.poseer
    ADD CONSTRAINT poseer_pkey PRIMARY KEY (nombre_materia, no_unidad, nombre_tema, no_material, no_foro);


--
-- TOC entry 3218 (class 2606 OID 25419)
-- Name: presentar presentar_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.presentar
    ADD CONSTRAINT presentar_pkey PRIMARY KEY (nombre_examen, email_alumno, user_alumno);


--
-- TOC entry 3228 (class 2606 OID 25516)
-- Name: recurso recurso_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.recurso
    ADD CONSTRAINT recurso_pkey PRIMARY KEY (id_recurso);


--
-- TOC entry 3230 (class 2606 OID 25524)
-- Name: subir subir_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.subir
    ADD CONSTRAINT subir_pkey PRIMARY KEY (email_profesor, user_profesor, nombre_materia, no_unidad, nombre_tema, no_material);


--
-- TOC entry 3220 (class 2606 OID 25434)
-- Name: tema tema_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tema
    ADD CONSTRAINT tema_pkey PRIMARY KEY (nombre_materia, no_unidad, nombre_tema);


--
-- TOC entry 3200 (class 2606 OID 25303)
-- Name: tener tener_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tener
    ADD CONSTRAINT tener_pkey PRIMARY KEY (email_alumno, user_alumno, no_boleta);


--
-- TOC entry 3212 (class 2606 OID 25381)
-- Name: unidad unidad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad
    ADD CONSTRAINT unidad_pkey PRIMARY KEY (nombre_materia, no_unidad);


--
-- TOC entry 3243 (class 2606 OID 25324)
-- Name: acceder acceder_email_tutor_user_tutor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.acceder
    ADD CONSTRAINT acceder_email_tutor_user_tutor_fkey FOREIGN KEY (email_tutor, user_tutor) REFERENCES public.c_tutor(email_tutor, user_tutor);


--
-- TOC entry 3242 (class 2606 OID 25319)
-- Name: acceder acceder_no_boleta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.acceder
    ADD CONSTRAINT acceder_no_boleta_fkey FOREIGN KEY (no_boleta) REFERENCES public.boleta(no_boleta);


--
-- TOC entry 3250 (class 2606 OID 25400)
-- Name: aplicar aplicar_email_profesor_user_profesor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.aplicar
    ADD CONSTRAINT aplicar_email_profesor_user_profesor_fkey FOREIGN KEY (email_profesor, user_profesor) REFERENCES public.c_profesor(email_profesor, user_profesor);


--
-- TOC entry 3251 (class 2606 OID 25405)
-- Name: aplicar aplicar_nombre_examen_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.aplicar
    ADD CONSTRAINT aplicar_nombre_examen_fkey FOREIGN KEY (nombre_examen) REFERENCES public.examen(nombre_examen);


--
-- TOC entry 3252 (class 2606 OID 25410)
-- Name: aplicar aplicar_nombre_materia_no_unidad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.aplicar
    ADD CONSTRAINT aplicar_nombre_materia_no_unidad_fkey FOREIGN KEY (nombre_materia, no_unidad) REFERENCES public.unidad(nombre_materia, no_unidad);


--
-- TOC entry 3237 (class 2606 OID 25268)
-- Name: c_tutor c_tutor_user_profesor_email_profesor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.c_tutor
    ADD CONSTRAINT c_tutor_user_profesor_email_profesor_fkey FOREIGN KEY (user_profesor, email_profesor) REFERENCES public.c_profesor(user_profesor, email_profesor);


--
-- TOC entry 3244 (class 2606 OID 25334)
-- Name: calcification calcification_no_boleta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.calcification
    ADD CONSTRAINT calcification_no_boleta_fkey FOREIGN KEY (no_boleta) REFERENCES public.boleta(no_boleta);


--
-- TOC entry 3257 (class 2606 OID 25476)
-- Name: comentario comentario_no_foro_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comentario
    ADD CONSTRAINT comentario_no_foro_fkey FOREIGN KEY (no_foro) REFERENCES public.foro(no_foro);


--
-- TOC entry 3239 (class 2606 OID 25284)
-- Name: enlazar enlazar_email_alumno_user_alumno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.enlazar
    ADD CONSTRAINT enlazar_email_alumno_user_alumno_fkey FOREIGN KEY (email_alumno, user_alumno) REFERENCES public.c_alumno(email_alumno, user_alumno);


--
-- TOC entry 3238 (class 2606 OID 25279)
-- Name: enlazar enlazar_email_tutor_user_tutor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.enlazar
    ADD CONSTRAINT enlazar_email_tutor_user_tutor_fkey FOREIGN KEY (email_tutor, user_tutor) REFERENCES public.c_tutor(email_tutor, user_tutor);


--
-- TOC entry 3263 (class 2606 OID 25587)
-- Name: entregar entregar_email_alumno_user_alumno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.entregar
    ADD CONSTRAINT entregar_email_alumno_user_alumno_fkey FOREIGN KEY (email_alumno, user_alumno) REFERENCES public.c_alumno(email_alumno, user_alumno) NOT VALID;


--
-- TOC entry 3264 (class 2606 OID 25592)
-- Name: entregar entregar_nombre_materia_no_unidad_nombre_tema_no_material_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.entregar
    ADD CONSTRAINT entregar_nombre_materia_no_unidad_nombre_tema_no_material_fkey FOREIGN KEY (nombre_materia, no_unidad, nombre_tema, no_material) REFERENCES public.material(nombre_materia, no_unidad, nombre_tema, no_material) NOT VALID;


--
-- TOC entry 3256 (class 2606 OID 25463)
-- Name: foro foro_email_profesor_user_profesor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.foro
    ADD CONSTRAINT foro_email_profesor_user_profesor_fkey FOREIGN KEY (email_profesor, user_profesor) REFERENCES public.c_profesor(email_profesor, user_profesor);


--
-- TOC entry 3245 (class 2606 OID 25352)
-- Name: impartir impartir_email_profesor_user_profesor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.impartir
    ADD CONSTRAINT impartir_email_profesor_user_profesor_fkey FOREIGN KEY (email_profesor, user_profesor) REFERENCES public.c_profesor(email_profesor, user_profesor);


--
-- TOC entry 3246 (class 2606 OID 25357)
-- Name: impartir impartir_nombre_materia_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.impartir
    ADD CONSTRAINT impartir_nombre_materia_fkey FOREIGN KEY (nombre_materia) REFERENCES public.materia(nombre_materia);


--
-- TOC entry 3247 (class 2606 OID 25367)
-- Name: inscribir inscribir_email_alumno_user_alumno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.inscribir
    ADD CONSTRAINT inscribir_email_alumno_user_alumno_fkey FOREIGN KEY (email_alumno, user_alumno) REFERENCES public.c_alumno(email_alumno, user_alumno);


--
-- TOC entry 3248 (class 2606 OID 25372)
-- Name: inscribir inscribir_nombre_materia_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.inscribir
    ADD CONSTRAINT inscribir_nombre_materia_fkey FOREIGN KEY (nombre_materia) REFERENCES public.materia(nombre_materia);


--
-- TOC entry 3265 (class 2606 OID 25552)
-- Name: material material_nombre_materia_no_unidad_nombre_tema_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.material
    ADD CONSTRAINT material_nombre_materia_no_unidad_nombre_tema_fkey FOREIGN KEY (nombre_materia, no_unidad, nombre_tema) REFERENCES public.tema(nombre_materia, no_unidad, nombre_tema);


--
-- TOC entry 3258 (class 2606 OID 25486)
-- Name: participar participar_email_alumno_user_alumno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.participar
    ADD CONSTRAINT participar_email_alumno_user_alumno_fkey FOREIGN KEY (email_alumno, user_alumno) REFERENCES public.c_alumno(email_alumno, user_alumno);


--
-- TOC entry 3259 (class 2606 OID 25491)
-- Name: participar participar_no_foro_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.participar
    ADD CONSTRAINT participar_no_foro_fkey FOREIGN KEY (no_foro) REFERENCES public.foro(no_foro);


--
-- TOC entry 3266 (class 2606 OID 25577)
-- Name: poseer poseer_no_foro_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.poseer
    ADD CONSTRAINT poseer_no_foro_fkey FOREIGN KEY (no_foro) REFERENCES public.foro(no_foro);


--
-- TOC entry 3267 (class 2606 OID 25582)
-- Name: poseer poseer_nombre_materia_no_unidad_nombre_tema_no_material_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.poseer
    ADD CONSTRAINT poseer_nombre_materia_no_unidad_nombre_tema_no_material_fkey FOREIGN KEY (nombre_materia, no_unidad, nombre_tema, no_material) REFERENCES public.material(nombre_materia, no_unidad, nombre_tema, no_material);


--
-- TOC entry 3254 (class 2606 OID 25425)
-- Name: presentar presentar_email_alumno_user_alumno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.presentar
    ADD CONSTRAINT presentar_email_alumno_user_alumno_fkey FOREIGN KEY (email_alumno, user_alumno) REFERENCES public.c_alumno(email_alumno, user_alumno);


--
-- TOC entry 3253 (class 2606 OID 25420)
-- Name: presentar presentar_nombre_examen_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.presentar
    ADD CONSTRAINT presentar_nombre_examen_fkey FOREIGN KEY (nombre_examen) REFERENCES public.examen(nombre_examen);


--
-- TOC entry 3260 (class 2606 OID 25557)
-- Name: recurso recurso_nombre_materia_no_unidad_nombre_tema_no_material_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.recurso
    ADD CONSTRAINT recurso_nombre_materia_no_unidad_nombre_tema_no_material_fkey FOREIGN KEY (nombre_materia, no_unidad, nombre_tema, no_material) REFERENCES public.material(nombre_materia, no_unidad, nombre_tema, no_material) NOT VALID;


--
-- TOC entry 3261 (class 2606 OID 25562)
-- Name: subir subir_email_profesor_user_profesor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.subir
    ADD CONSTRAINT subir_email_profesor_user_profesor_fkey FOREIGN KEY (email_profesor, user_profesor) REFERENCES public.c_profesor(email_profesor, user_profesor) NOT VALID;


--
-- TOC entry 3262 (class 2606 OID 25567)
-- Name: subir subir_nombre_materia_no_unidad_nombre_tema_no_material_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.subir
    ADD CONSTRAINT subir_nombre_materia_no_unidad_nombre_tema_no_material_fkey FOREIGN KEY (nombre_materia, no_unidad, nombre_tema, no_material) REFERENCES public.material(nombre_materia, no_unidad, nombre_tema, no_material) NOT VALID;


--
-- TOC entry 3255 (class 2606 OID 25435)
-- Name: tema tema_nombre_materia_no_unidad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tema
    ADD CONSTRAINT tema_nombre_materia_no_unidad_fkey FOREIGN KEY (nombre_materia, no_unidad) REFERENCES public.unidad(nombre_materia, no_unidad);


--
-- TOC entry 3240 (class 2606 OID 25304)
-- Name: tener tener_email_alumno_user_alumno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tener
    ADD CONSTRAINT tener_email_alumno_user_alumno_fkey FOREIGN KEY (email_alumno, user_alumno) REFERENCES public.c_alumno(email_alumno, user_alumno);


--
-- TOC entry 3241 (class 2606 OID 25309)
-- Name: tener tener_no_boleta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tener
    ADD CONSTRAINT tener_no_boleta_fkey FOREIGN KEY (no_boleta) REFERENCES public.boleta(no_boleta);


--
-- TOC entry 3249 (class 2606 OID 25382)
-- Name: unidad unidad_nombre_materia_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.unidad
    ADD CONSTRAINT unidad_nombre_materia_fkey FOREIGN KEY (nombre_materia) REFERENCES public.materia(nombre_materia);


--
-- TOC entry 3399 (class 0 OID 0)
-- Dependencies: 3
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;
GRANT ALL ON SCHEMA public TO postgres;


-- Completed on 2020-09-09 12:14:32 CDT

--
-- PostgreSQL database dump complete
--
