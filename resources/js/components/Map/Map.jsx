import {useMemo, useCallback, useRef, useState, useEffect} from "react";
import {GoogleMap, InfoWindow, Marker, MarkerClusterer} from "@react-google-maps/api"
import {Axios} from "axios";


export default function Map(){
    const mapRef = useRef()
    const center = useMemo(()=>({lat:53.6,lng:28}), [])
    const options = useMemo(()=>(
        {
            mapId: '4675850efa5bc8a',
            disableDefaultUI: true,
            clickableIcons: false
        }
    ), [])
    const [selected, setSelected] = useState(null)

    const iconOptions = {
        path:
            "M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z",
        fillColor: "grey",
        fillOpacity: 0.6,
        scale: 1,
        strokeColor: "gold",
        strokeWeight: 6
    }
    const onLoad = useCallback((map)=>(mapRef.current = map),[])
    const location = [
        {lat: 52.53296257862796, lng: 30.974941827667916, name:"tr", id:1},
        {lat: 53.944411813859716,lng: 27.54872969101749, name: "kk", id:2},
        {lat: 53.985414696174544,lng: 30.299211140763095, name: "ll", id:3},
        {lat: 55.2295146846639, lng: 30.1611231274532, name: 'oo', id:4},
        {lat: 53.64652954655726, lng: 23.805565416181327, name: 'pp',id:5},
        {lat: 52.10792777414206,  lng: 23.74854808272311, name: 'yyyy',id:6}
    ]
    const [data, setData] = useState([])
    useEffect(()=>{
        axios.get('/api/places')
            .then((res)=>{
             setData(res.data)
            })
            .catch((err)=>console.log(err))
    }, [])
    const places = data.map((d)=>({
                lat: parseFloat(d.lat),
                lng: parseFloat(d.lng),
            title: d.title
        }
        ))


    function createKey(props){
        return props.lat + props.lng
    }

    return(
        <div>
            <GoogleMap
                zoom={5}
                center={center}
                mapContainerClassName='map_container'
                options={options}
                onLoad={onLoad}
            >
                <MarkerClusterer>
                    {
                        (clusterer) =>
                            location.map((location) => (
                                <Marker key={createKey(location)} position={location} clusterer={clusterer} icon={iconOptions}/>
                            ))
                    }
                </MarkerClusterer>
                <MarkerClusterer>
                    {
                        (clusterer) =>
                            places.map(places =>(
                                    <Marker key={createKey(places)} position={places} clusterer={clusterer} onClick={()=>{
                                        setSelected(places)
                                    }}>
                                        {(<InfoWindow position={places} onCloseClick={()=>{setSelected(null)}}>
                                                <h1>{places.title}</h1>
                                            </InfoWindow>)} </Marker>
                                    )
                            )
                    }
                </MarkerClusterer>
            </GoogleMap>
        </div>
    )
}
